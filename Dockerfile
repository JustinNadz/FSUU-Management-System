# Multi-stage build: frontend (React) then backend (Laravel)

########### Frontend Build ###########
FROM node:18-alpine AS frontend
WORKDIR /frontend
COPY frontend/package*.json ./
RUN npm install --legacy-peer-deps
COPY frontend/ .
RUN npm run build

########### Backend Build ###########
FROM php:8.2-cli AS backend

# Install system dependencies & PHP extensions
RUN apt-get update \
 && apt-get install -y --no-install-recommends \
    git unzip libzip-dev libpng-dev libonig-dev libxml2-dev \
    libpq-dev postgresql-client default-mysql-client \
 && docker-php-ext-install pdo pdo_mysql zip \
 && docker-php-ext-configure pgsql --with-pgsql=/usr \
 && docker-php-ext-install pdo_pgsql pgsql \
 && rm -rf /var/lib/apt/lists/*

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer','composer-setup.php');" \
 && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
 && rm composer-setup.php

WORKDIR /app

# Leverage layer caching for composer deps
ENV COMPOSER_ALLOW_SUPERUSER=1
COPY backend/composer.json backend/composer.lock ./
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist --no-interaction \
 || composer update --no-dev --no-scripts --no-autoloader --prefer-dist --no-interaction

# Copy backend source
COPY backend/ .

# Install (optimize) with autoloader now that full source present
RUN composer install --no-dev --optimize-autoloader --prefer-dist --no-interaction \
 || composer update --no-dev --optimize-autoloader --prefer-dist --no-interaction \
 && php artisan package:discover --ansi || true

# Copy built frontend assets into Laravel public (served at /dist)
COPY --from=frontend /frontend/dist /app/public/dist

# Ensure storage & cache directories writable
RUN chown -R www-data:www-data storage bootstrap/cache \
 && find storage -type d -exec chmod 775 {} \; \
 && chmod -R 775 bootstrap/cache

ENV APP_ENV=production \
    APP_DEBUG=false \
    LOG_CHANNEL=stderr \
    DB_HOST=mysql \
    DB_PORT=3306 \
    DB_DATABASE=laravel \
    DB_USERNAME=root \
    DB_PASSWORD=secret \
    FRONTEND_URL=http://localhost:5173

EXPOSE 8000

# Entry script: use Render's $PORT if provided; generate key if missing; cache config/routes; run migrations (ignore if DB not ready); start server
CMD sh -lc "RENDER_PORT=\${PORT:-8000} \
 && php artisan key:generate --force || true \
 && php artisan config:cache \
 && php artisan route:cache || true \
 && php artisan migrate --force || true \
 && php artisan serve --host=0.0.0.0 --port=\$RENDER_PORT"

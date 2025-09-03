# Use official PHP 8.2 image with Apache
FROM php:8.2-apache

# Install system dependencies and PHP extensions (including PostgreSQL)
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    libzip-dev \
    mariadb-client \
    libpq-dev \
    postgresql-client \
    && docker-php-ext-configure pgsql \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip pdo_pgsql pgsql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* \
    && php -m | grep -i pdo

# Enable Apache mod_rewrite for Laravel routing
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy Laravel app into container
COPY . .

# Copy .env file specifically
COPY .env /var/www/html/.env

# Install Composer globally
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Set permissions for storage and cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod 644 /var/www/html/.env \
    && ls -la /var/www/html/.env

# Point Apache to Laravel's public folder
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Create startup script
RUN echo '#!/bin/bash\n\
echo "Starting Laravel application..."\n\
echo "Checking .env file..."\n\
ls -la /var/www/html/.env\n\
echo "Checking PHP extensions..."\n\
php -m | grep -i pdo\n\
echo "Testing database connection..."\n\
php artisan config:cache\n\
php artisan route:cache\n\
echo "Running migrations..."\n\
php artisan migrate --force || echo "Migration failed, continuing..."\n\
echo "Starting Apache..."\n\
apache2-foreground' > /usr/local/bin/start.sh \
    && chmod +x /usr/local/bin/start.sh

# Expose port 80
EXPOSE 80

# Start with custom script
CMD ["/usr/local/bin/start.sh"]

# Use official PHP 8.2 image with Apache
FROM php:8.2-apache

# Install system dependencies and PostgreSQL support
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
    postgresql-server-dev-all \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions with explicit PostgreSQL support
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install PostgreSQL extensions with multiple methods for maximum compatibility
RUN docker-php-ext-configure pgsql --with-pgsql=/usr \
    && docker-php-ext-install pdo_pgsql pgsql

# Alternative installation if the above fails
RUN if ! php -m | grep -q pdo_pgsql; then \
        echo "Installing PostgreSQL extensions via alternative method..."; \
        docker-php-ext-configure pgsql --with-pgsql=/usr/local/pgsql; \
        docker-php-ext-install pdo_pgsql pgsql; \
    fi

# Final verification - this will fail the build if extensions aren't installed
RUN php -m | grep -i pdo && php -m | grep -i pgsql && echo "✅ PostgreSQL extensions successfully installed"

# Enable Apache mod_rewrite for Laravel routing
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy Laravel app into container
COPY . .

# Copy .env file specifically
COPY .env /var/www/html/.env

# Copy PHP configuration
COPY php.ini /usr/local/etc/php/conf.d/custom.ini

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

# Create startup script with comprehensive diagnostics
RUN echo '#!/bin/bash\n\
echo "🚀 Starting Laravel application..."\n\
echo "📁 Checking .env file..."\n\
ls -la /var/www/html/.env\n\
echo "🔍 Checking PHP extensions..."\n\
php -m | grep -i pdo\n\
php -m | grep -i pgsql\n\
echo "🔧 Verifying PostgreSQL driver..."\n\
php -r "if (extension_loaded('pdo_pgsql')) { echo '✅ pdo_pgsql extension is loaded'; } else { echo '❌ pdo_pgsql extension is NOT loaded'; }"\n\
php -r "if (extension_loaded('pgsql')) { echo '✅ pgsql extension is loaded'; } else { echo '❌ pgsql extension is NOT loaded'; }"\n\
echo "🧪 Running comprehensive database test..."\n\
php /var/www/html/test-postgres.php\n\
echo "🔧 Force loading extensions..."\n\
php /var/www/html/load-extensions.php\n\
echo "⚙️ Caching configuration..."\n\
php artisan config:cache\n\
php artisan route:cache\n\
echo "🗄️ Running migrations..."\n\
php artisan migrate --force || echo "⚠️ Migration failed, continuing..."\n\
echo "🔍 Final verification..."\n\
php -r "if (!extension_loaded('pdo_pgsql')) { echo '❌ CRITICAL: pdo_pgsql still not loaded!'; exit(1); } else { echo '✅ pdo_pgsql confirmed loaded'; }"\n\
echo "🌐 Starting Apache..."\n\
apache2-foreground' > /usr/local/bin/start.sh \
    && chmod +x /usr/local/bin/start.sh

# Expose port 80
EXPOSE 80

# Start with custom script
CMD ["/usr/local/bin/start.sh"]
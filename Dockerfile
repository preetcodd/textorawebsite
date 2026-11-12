FROM richarvey/nginx-php-fpm:3.1.6

# Set working directory
WORKDIR /var/www/html

# Copy all project files into container
COPY . /var/www/html

# Image configurations for Nginx and PHP-FPM
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public_html
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel Production Defaults
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Install Composer dependencies during Docker build so vendor/autoload.php is pre-packaged
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Ensure writable permissions for Laravel storage and cache
RUN chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache

# Ensure startup deployment script is executable
RUN chmod +x /var/www/html/scripts/00-laravel-deploy.sh

EXPOSE 80

CMD ["/start.sh"]

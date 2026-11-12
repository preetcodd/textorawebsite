FROM richarvey/nginx-php-fpm:3.1.6

# Copy application files to web server directory
COPY . /var/www/html

# Image configurations for Nginx and PHP-FPM
ENV SKIP_COMPOSER 0
ENV WEBROOT /var/www/html/public_html
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel Production Defaults
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Set permissions for startup scripts
RUN chmod +x /var/www/html/scripts/00-laravel-deploy.sh

EXPOSE 80

CMD ["/start.sh"]

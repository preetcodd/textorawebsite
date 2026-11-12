FROM php:8.3-fpm-alpine

# Install system dependencies and build libraries
RUN apk add --no-cache \
    bash \
    nginx \
    supervisor \
    libpq \
    libzip \
    icu-libs \
    libpng \
    libjpeg-turbo \
    freetype \
 && apk add --no-cache --virtual .build-deps \
    $PHPIZE_DEPS \
    postgresql-dev \
    libzip-dev \
    icu-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
 && docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-install \
    pdo_pgsql \
    pdo_mysql \
    intl \
    zip \
    gd \
    opcache \
    bcmath \
 && apk del .build-deps

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Environment variables
ENV APP_ENV=production
ENV APP_DEBUG=false
ENV LOG_CHANNEL=stderr
ENV COMPOSER_ALLOW_SUPERUSER=1

# Copy configuration files
COPY conf/nginx/nginx-site.conf /etc/nginx/http.d/default.conf
COPY conf/supervisor/supervisord.conf /etc/supervisord.conf
COPY conf/start.sh /start.sh
RUN chmod +x /start.sh

# Copy application files
COPY . /var/www/html

# Install Composer dependencies at build time (PHP 8.3 satisfies openspout & filament)
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Ensure proper permissions for storage, bootstrap cache and public_html
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/public_html \
 && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["/start.sh"]

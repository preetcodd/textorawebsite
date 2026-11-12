#!/usr/bin/env bash
echo "==> Running Laravel Deployment Tasks on Render..."

echo "==> Installing Composer Dependencies (No Dev, Optimized)..."
composer install --no-dev --working-dir=/var/www/html --optimize-autoloader --no-interaction

echo "==> Ensuring Storage Symlink Exists..."
php /var/www/html/artisan storage:link || true

echo "==> Caching Configuration..."
php /var/www/html/artisan config:cache

echo "==> Caching Routes..."
php /var/www/html/artisan route:cache

echo "==> Caching Views..."
php /var/www/html/artisan view:cache

echo "==> Running Database Migrations..."
php /var/www/html/artisan migrate --force

echo "==> Deployment Tasks Successfully Completed!"

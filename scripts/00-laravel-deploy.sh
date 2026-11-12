#!/usr/bin/env bash
echo "==> Running Laravel Deployment Tasks on Render..."

# Ensure storage symlink exists
php /var/www/html/artisan storage:link || true

# Run database migrations
echo "==> Running Database Migrations..."
php /var/www/html/artisan migrate --force || echo "==> Note: Migration could not connect to database yet. Check DB credentials in Render."

# Cache configuration, routes, and views for optimal performance
echo "==> Caching Configuration and Routes..."
php /var/www/html/artisan config:cache || true
php /var/www/html/artisan route:cache || true
php /var/www/html/artisan view:cache || true

echo "==> Deployment Tasks Successfully Completed!"

#!/usr/bin/env bash
set -e

echo "==> Running Laravel Deployment Tasks on Render..."

# Create storage symlink in both public and public_html
php /var/www/html/artisan storage:link || true
rm -rf /var/www/html/public_html/storage
ln -sfn /var/www/html/storage/app/public /var/www/html/public_html/storage || true

# Run database migrations
echo "==> Running Database Migrations..."
php /var/www/html/artisan migrate --force || echo "==> Note: Migrations skipped or failed. Verify DB credentials in Render."

# Cache configs, routes, and views for optimal performance
echo "==> Caching Configurations and Routes..."
php /var/www/html/artisan config:cache || true
php /var/www/html/artisan route:cache || true
php /var/www/html/artisan view:cache || true

echo "==> Starting Web Server (Nginx + PHP-FPM 8.3 via Supervisord)..."
exec /usr/bin/supervisord -c /etc/supervisord.conf

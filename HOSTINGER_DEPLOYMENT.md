# Hostinger Deployment Guide

## 1. Deployment package

Use the generated `textora-hostinger.zip` package. It contains the Laravel application, Composer dependencies, database migrations, compiled frontend assets, and the existing `public_html` web entry point.

The package deliberately excludes `.env`, `.git`, `node_modules`, test files, logs, and local cache files.

## 2. Hostinger configuration

1. Open hPanel for `textorasms.com`.
2. Open **File Manager** and upload the package contents to the domain's document root.
3. Set the domain's document root to the folder containing `index.php`, which is the `public_html` folder from this project.
4. Create a new `.env` file in the project root with the production values below.
5. Replace `APP_KEY` with the value from the local `.env` file or run `php artisan key:generate` on the server.
6. Set `APP_ENV=production`, `APP_DEBUG=false`, and `APP_URL=https://textorasms.com/`.
7. Set the database values supplied by Hostinger's MySQL database panel. Use the Hostinger database name, username, and password. Do not use the local XAMPP database credentials.
8. Set `SESSION_ENCRYPT=false` only for compatibility with the current application; use HTTPS before public launch.
9. Set `QUEUE_CONNECTION=database`, `CACHE_STORE=file`, and `FILESYSTEM_DISK=local`.
10. Enable HTTPS and redirect HTTP to HTTPS in the domain's SSL settings.

## 3. Database

1. Create a MySQL database in Hostinger.
2. Create a database user with full access to that database.
3. Run the following command from the project root through SSH or the Hostinger terminal:

```bash
php artisan migrate --force --no-interaction
```

4. Verify the application:

```bash
php artisan optimize:clear
php artisan optimize
```

## 4. PHP settings

Use PHP 8.3 or newer. The project currently requires PHP 8.3 through Composer.

Enable these PHP extensions on Hostinger:

- `curl`
- `gd`
- `mbstring`
- `mysqli`
- `pdo_mysql`
- `zip`
- `xml`
- `intl`
- `bcmath`
- `exif`
- `ctype`
- `json`
- `fileinfo`

## 5. Verification

Open `https://textorasms.com/` and verify the homepage, pricing pages, enquiry forms, and static assets.

If the site returns a 500 error, run `php artisan optimize:clear` and inspect the error log at `storage/logs/laravel.log`.

## 6. HRMS

No HRMS integration is included in this deployment.

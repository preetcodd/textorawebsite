<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Textora Deployment Diagnostic & Auto-Migration</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; background: #0f172a; color: #f8fafc; padding: 40px 20px; }
        .card { max-width: 650px; margin: auto; background: #1e293b; border-radius: 16px; padding: 30px; border: 1px solid #334155; box-shadow: 0 10px 25px rgba(0,0,0,0.3); }
        h1 { color: #22c55e; margin-top: 0; font-size: 24px; }
        .item { padding: 12px 16px; margin-bottom: 12px; border-radius: 8px; font-size: 14px; }
        .ok { background: #064e3b; color: #6ee7b7; border: 1px solid #059669; }
        .err { background: #7f1d1d; color: #fca5a5; border: 1px solid #dc2626; }
        pre { background: #020617; color: #cbd5e1; padding: 12px; border-radius: 8px; overflow-x: auto; font-size: 12px; }
        a.btn { display: inline-block; background: #22c55e; color: #022c22; font-weight: bold; padding: 12px 24px; border-radius: 8px; text-decoration: none; margin-top: 15px; }
    </style>
</head>
<body>
<div class="card">
    <h1>Textora Deployment & Database Setup</h1>

<?php

$baseDir = file_exists(__DIR__ . '/artisan') ? __DIR__ : dirname(__DIR__);

// 1. Check PHP Version
echo "<div class='item ok'>&#10004; PHP Version: " . PHP_VERSION . "</div>";

// 2. Auto-create bootstrap/cache and storage directories
$dirs = [
    $baseDir . '/bootstrap/cache',
    $baseDir . '/storage',
    $baseDir . '/storage/framework',
    $baseDir . '/storage/framework/cache',
    $baseDir . '/storage/framework/cache/data',
    $baseDir . '/storage/framework/sessions',
    $baseDir . '/storage/framework/views',
    $baseDir . '/storage/logs',
];

$dirErrors = [];
foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        if (!@mkdir($dir, 0775, true)) {
            $dirErrors[] = "Failed to create: " . basename($dir);
        }
    }
}

if (empty($dirErrors)) {
    echo "<div class='item ok'>&#10004; bootstrap/cache & storage folders: Ready & Verified</div>";
} else {
    echo "<div class='item err'>&#10008; Storage error: " . implode(', ', $dirErrors) . "</div>";
}

// 3. Check .env file
$envPath = $baseDir . '/.env';
if (!file_exists($envPath)) {
    echo "<div class='item err'>&#10008; Missing .env file at: $envPath<br>Please create a .env file in your website root folder in Hostinger File Manager!</div>";
    echo "</div></body></html>";
    exit;
}
echo "<div class='item ok'>&#10004; .env file found</div>";

// 4. Parse DB settings from .env
$env = [];
$lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach ($lines as $line) {
    $line = trim($line);
    if (empty($line) || $line[0] === '#' || strpos($line, '=') === false) continue;
    list($k, $v) = explode('=', $line, 2);
    $env[trim($k)] = trim(trim($v), '"\'');
}

$dbHost = $env['DB_HOST'] ?? '127.0.0.1';
$dbPort = $env['DB_PORT'] ?? '3306';
$dbName = $env['DB_DATABASE'] ?? '';
$dbUser = $env['DB_USERNAME'] ?? '';
$dbPass = $env['DB_PASSWORD'] ?? '';

echo "<p style='color:#94a3b8; font-size:13px;'>Connecting to Database: <strong>" . htmlspecialchars($dbName) . "</strong> with User: <strong>" . htmlspecialchars($dbUser) . "</strong></p>";

// 5. Direct Database Connection & Migration
try {
    $pdo = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName;charset=utf8mb4", $dbUser, $dbPass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    echo "<div class='item ok'>&#10004; MySQL Database Connected Successfully!</div>";

    // Create table directly
    $sql = "CREATE TABLE IF NOT EXISTS `whatsapp_short_links` (
        `id` bigint unsigned NOT NULL AUTO_INCREMENT,
        `slug` varchar(12) NOT NULL UNIQUE,
        `country_code` varchar(10) NOT NULL,
        `phone_number` varchar(25) NOT NULL,
        `message` text NULL,
        `target_url` text NOT NULL,
        `clicks` bigint unsigned NOT NULL DEFAULT 0,
        `created_at` timestamp NULL DEFAULT NULL,
        `updated_at` timestamp NULL DEFAULT NULL,
        PRIMARY KEY (`id`),
        INDEX `idx_slug` (`slug`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

    $pdo->exec($sql);
    echo "<div class='item ok'>&#10004; Table 'whatsapp_short_links' created successfully!</div>";

    // Run Laravel Artisan migrate if vendor is present
    if (file_exists($baseDir . '/vendor/autoload.php')) {
        require $baseDir . '/vendor/autoload.php';
        $app = require_once $baseDir . '/bootstrap/app.php';
        $kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
        $kernel->call('migrate', ['--force' => true]);
        $kernel->call('optimize:clear');
        echo "<div class='item ok'>&#10004; Laravel Migrations & Cache Cleared!</div>";
        echo "<pre>" . htmlspecialchars($kernel->output()) . "</pre>";
    }

    echo "<p><a href='/' class='btn'>Go to Website &rarr;</a></p>";

} catch (PDOException $e) {
    echo "<div class='item err'>&#10008; Database Error: " . htmlspecialchars($e->getMessage()) . "<br><br>Make sure DB_DATABASE, DB_USERNAME, and DB_PASSWORD in your .env file match your Hostinger database details!</div>";
}

?>
</div>
</body>
</html>

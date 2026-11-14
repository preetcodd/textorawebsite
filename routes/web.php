<?php

use App\Http\Controllers\ClientMasterController;
use App\Http\Controllers\EnquiryMasterController;
use App\Http\Controllers\PortfolioMasterController;
use App\Http\Controllers\PricingMasterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VlogMastersController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SitemapController;
use App\Http\Controllers\WhatsappLinkController;


Route::get('/', function () {
    // return view('Website.about_us');  
    return view('Website.home_web', ['isAdmin' => false]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard-client', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard_client');

// Admin shortcut route
Route::get('/admin', function () {
    if (\Illuminate\Support\Facades\Auth::check()) {
        return redirect()->route('dashboard');
    }
    return redirect()->route('login');
});

Route::view('/about-us', 'Website.about_us');
// Route::view('/pricing-web', 'Website.pricing_page');
// In routes/web.php (or relevant routes file) - unchanged
Route::get('/pricing-web', [PricingMasterController::class, 'pricing_web_view']);
Route::view('/contact-us', 'Website.contact_us');
Route::redirect('/api-docs-web', '/contact-us');
Route::get('/portfolio', [PortfolioMasterController::class, 'portfolio_web_view'])->name('portfolio.web');
Route::view('/term-and-Conditions', 'Website.terms_condition');
Route::view('/privacy-policy', 'Website.privacy_policy');
Route::view('/refund_policy', 'Website.refund_policy');
Route::view('/bulk-sms', 'Website.bulk_sms');
Route::view('/bulk-whatsapp', 'Website.bulk_whatsapp');
Route::view('/email-marketing', 'Website.email_marketing');
Route::view('/website-development', 'Website.website_development');
Route::view('/faq', 'Website.faq');
Route::view('/rcs-messaging', 'Website.rcs_messaging');
Route::view('/404-not-found', 'page_404_not_found');
Route::view('/reseller', 'Website.reseller');
Route::view('/voice-call', 'Website.voice_api');
Route::view('/services-web', 'Website.services');
Route::view('/sms-api', 'Website.otp_api');
Route::view('/whatsapp-link-generator', 'Website.whatsapp_link_generator');
Route::post('/whatsapp-links/generate', [WhatsappLinkController::class, 'store'])->name('whatsapp.generate');
Route::get('/w/{slug}', [WhatsappLinkController::class, 'redirect'])->name('whatsapp.w.redirect');

// Subdomain short link route for custom domain (e.g. w.textorasms.com)
$shortDomain = config('app.whatsapp_short_domain') ?: env('WHATSAPP_SHORT_DOMAIN');
if (!empty($shortDomain)) {
    Route::domain($shortDomain)->group(function () {
        Route::get('/', function () {
            return redirect('https://textorasms.com/whatsapp-link-generator');
        });
        Route::get('/{slug}', [WhatsappLinkController::class, 'redirect'])->name('whatsapp.subdomain.redirect');
    });
}

// Run database migration, link storage & clear cache via browser (for shared hosting without SSH)
Route::get('/run-migration', function () {
    try {
        \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
        $migrateOutput = \Illuminate\Support\Facades\Artisan::output();

        // 1. Ensure storage folders and permissions exist for admin uploads
        $vlogsDir = storage_path('app/public/vlogs');
        $tmpDir = storage_path('app/livewire-tmp');
        if (!is_dir($vlogsDir)) @mkdir($vlogsDir, 0775, true);
        if (!is_dir($tmpDir)) @mkdir($tmpDir, 0775, true);
        @chmod(storage_path('app/public'), 0775);
        @chmod($vlogsDir, 0775);
        @chmod($tmpDir, 0775);

        // 2. Ensure public_html/storage symlink exists
        $publicStorage = public_path('storage');
        $targetStorage = storage_path('app/public');
        if (file_exists($publicStorage) && !is_link($publicStorage)) {
            @rename($publicStorage, $publicStorage . '_backup_' . date('Ymd_His'));
        }

        $symlinkResult = 'Already linked';
        if (!file_exists($publicStorage) && file_exists($targetStorage)) {
            if (@symlink('../storage/app/public', $publicStorage) || @symlink($targetStorage, $publicStorage)) {
                $symlinkResult = 'Symlink created successfully (public_html/storage -> storage/app/public)';
            } else {
                $symlinkResult = 'Symlink function blocked by host. Dynamic route fallback active.';
            }
        }

        // Try Artisan storage:link as well
        try {
            \Illuminate\Support\Facades\Artisan::call('storage:link');
            $storageOutput = \Illuminate\Support\Facades\Artisan::output();
        } catch (\Throwable $stEx) {
            $storageOutput = $stEx->getMessage();
        }

        \Illuminate\Support\Facades\Artisan::call('optimize:clear');
        $optimizeOutput = \Illuminate\Support\Facades\Artisan::output();

        $imageCount = is_dir($vlogsDir) ? count(glob($vlogsDir . '/*')) : 0;

        return "<div style='font-family:sans-serif;padding:30px;max-width:700px;margin:auto;'>"
             . "<h2 style='color:#16a34a;'>&#10004; Database Migrated & Storage Linked Successfully!</h2>"
             . "<div style='background:#f0fdf4;border:1px solid #bbf7d0;padding:12px 16px;border-radius:8px;margin-bottom:15px;color:#166534;'>"
             . "<strong>Storage Symlink:</strong> " . e($symlinkResult) . "<br>"
             . "<strong>Blog Images in storage/app/public/vlogs:</strong> " . $imageCount . " files"
             . "</div>"
             . "<pre style='background:#f1f5f9;padding:15px;border-radius:10px;font-size:13px;'>" 
             . e($migrateOutput) . "\n" 
             . e($storageOutput) . "\n" 
             . e($optimizeOutput) . "</pre>"
             . "<p><a href='/blog_list' style='color:#16a34a;font-weight:bold;margin-right:15px;'>&larr; View Blog List</a>"
             . "<a href='/' style='color:#0284c7;font-weight:bold;'>Go to Homepage &rarr;</a></p>"
             . "</div>";
    } catch (\Throwable $e) {
        return "<div style='font-family:sans-serif;padding:30px;max-width:700px;margin:auto;'>"
             . "<h2 style='color:#dc2626;'>&#10008; Migration Error</h2>"
             . "<pre style='background:#fee2e2;color:#991b1b;padding:15px;border-radius:10px;font-size:13px;'>" . e($e->getMessage()) . "</pre>"
             . "</div>";
    }
});

// Fail-safe storage route for blog & uploaded images if symlink is missing on shared hosting
Route::get('/storage/{path}', function ($path) {
    $cleanPath = str_replace(['..', "\0"], '', $path);

    // 1. Primary Laravel public storage disk
    $filePath = storage_path('app/public/' . $cleanPath);
    if (file_exists($filePath) && is_file($filePath)) {
        return response()->file($filePath);
    }

    // 2. Direct public_html fallback
    $altPath = public_path('storage/' . $cleanPath);
    if (file_exists($altPath) && is_file($altPath)) {
        return response()->file($altPath);
    }

    // 3. Base path fallback
    $basePath = base_path('storage/app/public/' . $cleanPath);
    if (file_exists($basePath) && is_file($basePath)) {
        return response()->file($basePath);
    }

    abort(404);
})->where('path', '.*');

Route::view('/whatsapp-business-api', 'Website.whatsapp_business_api');
Route::get('/blog_list', [VlogMastersController::class, 'blog_list']);
Route::get('/blog_details/{id}', [VlogMastersController::class, 'blog_details']);


Route::post('enquiry-web', [EnquiryMasterController::class, 'store']);




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::resource('users', UserController::class);
    Route::resource('users', UserController::class);
    Route::resource('clients', ClientMasterController::class);
    Route::resource('pricing', PricingMasterController::class);
    Route::resource('blog', VlogMastersController::class);
    Route::resource('portfolio-manage', PortfolioMasterController::class)->names('portfolio');
    Route::resource('enquiry', EnquiryMasterController::class);
});





Route::get('/sitemap.xml', [SitemapController::class, 'index']);


require __DIR__ . '/auth.php';

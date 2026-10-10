<?php

use App\Http\Controllers\ClientMasterController;
use App\Http\Controllers\EnquiryMasterController;
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

Route::view('/about-us', 'Website.about_us');
// Route::view('/pricing-web', 'Website.pricing_page');
// In routes/web.php (or relevant routes file) - unchanged
Route::get('/pricing-web', [PricingMasterController::class, 'pricing_web_view']);
Route::view('/contact-us', 'Website.contact_us');
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
$shortDomain = env('WHATSAPP_SHORT_DOMAIN');
if (!empty($shortDomain)) {
    Route::domain($shortDomain)->group(function () {
        Route::get('/{slug}', [WhatsappLinkController::class, 'redirect'])->name('whatsapp.subdomain.redirect');
    });
}

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
    Route::resource('enquiry', EnquiryMasterController::class);
});





Route::get('/sitemap.xml', [SitemapController::class, 'index']);


require __DIR__ . '/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController,WhatsAppController,TestimonialsController,SeoController,HomeController,BankController};
use App\Http\Controllers\LeadController;
use App\Http\Controllers\CareerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'home']);
Route::get('/contact-us', [HomeController::class, 'ContactPage'])->name('contact-us');
Route::get('/about-us', [HomeController::class, 'aboutPage'])->name('about-us');
Route::get('/customer-center', [HomeController::class, 'customerPage'])->name('customer-center');
Route::get('/customer-care', [HomeController::class, 'carePage'])->name('customer-care');
Route::get('/career', [HomeController::class, 'careerPage'])->name('career');
Route::get('/privacy-policy', [HomeController::class, 'privacyPage'])->name('privacy-policy');
Route::get('/refund-policy', [HomeController::class, 'refundPage'])->name('refund-policy');
Route::get('/terms-condition', [HomeController::class, 'termsPage'])->name('terms-condition');
Route::get('/payment', [HomeController::class, 'PaymentPage'])->name('payment');
Route::get('/faqs', [HomeController::class, 'faqsPage'])->name('faqs');
// services
Route::get('/dark-fiber', [HomeController::class, 'darkfiberPage'])->name('dark-fiber');
Route::get('/co-location', [HomeController::class, 'locationPage'])->name('co-location');
Route::get('/data-vpn', [HomeController::class, 'dataPage'])->name('data-vpn'); 
Route::get('/data-center', [HomeController::class, 'datacenterPage'])->name('data-center');
Route::get('/bisiness-internet', [HomeController::class, 'BusinessinternetPage'])->name('bisiness-internet');
Route::get('/internet', [HomeController::class, 'internetPage'])->name('internet');
Route::get('/voice-services', [HomeController::class, 'voicePage'])->name('voice-services');
Route::get('/sme-services', [HomeController::class, 'smePage'])->name('sme-services');
Route::get('/networking-solutions', [HomeController::class, 'networkingPage'])->name('networking-solutions');
Route::get('/hd-catv', [HomeController::class, 'hdCatvPage'])->name('hd-catv');
Route::get('/telephone', [HomeController::class, 'telephonePage'])->name('telephone');
Route::get('/nova-ai', [HomeController::class, 'novaPage'])->name('nova-ai');
Route::get('/techonology-partner', [HomeController::class, 'technologyPage'])->name('techonology-partner');
Route::get('/business-partner', [HomeController::class, 'businessPage'])->name('business-partner');
Route::get('/read-more', [HomeController::class, 'companyPage'])->name('company-overview');
Route::get('/iplay-service', [HomeController::class, 'iplayPage'])->name('iplay-service');
Route::get('/digital-box', [HomeController::class, 'digitalPage'])->name('digital-box');

Route::post('/submit-lead', [LeadController::class, 'submit'])->name('submit-lead');

// payment
Route::get('/easypaisa-instruction', [HomeController::class, 'bankpaymentPage'])->name('kuick-instruction');

// end
Route::post('/webhook/whatsapp', [WhatsAppController::class, 'handleIncoming']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
// routes/web.php
Route::post('/send-cv', [CareerController::class, 'sendCV'])->name('send.cv');

Route::resource('/user', UserController::class);
Route::controller(UserController::class)->group(function () {
    Route::post('user/update/{id}', 'update')->name('user.update');
    Route::get('user/delete/{id}', 'delete')->name('user.delete');
});
Route::resource('/seo', SeoController::class);
Route::controller(SeoController::class)->group(function () {
    Route::post('seo/update/{id}', 'update')->name('seo.update');
    Route::get('seo/delete/{id}', 'delete')->name('seo.delete');
});
Route::resource('/testimonials', TestimonialsController::class);
Route::controller(TestimonialsController::class)->group(function () {
    Route::put('testimonials/update/{id}', 'update')->name('testimonials.update');
    Route::get('testimonials/delete/{id}', 'delete')->name('testimonials.delete');
    Route::get('quotes/index', 'quotesIndex')->name('quotes.index');
});

// ashar code

Route::get('/deploy-hook', function () {
    // Optional: Add a secret token check
    if (Request::get('token') !== env('DEPLOY_SECRET')) {
        abort(403, 'Unauthorized');
    }

    putenv('COMPOSER_HOME=' . base_path() . '/vendor/bin/composer');

    // Run composer install
    shell_exec('cd ' . base_path() . ' && composer install --no-interaction --prefer-dist');

    // Run Laravel migrations
    Artisan::call('migrate', ['--force' => true]);

    // Optional: Clear & cache config
    Artisan::call('config:cache');

    return response()->json(['status' => 'Deployed successfully']);
});
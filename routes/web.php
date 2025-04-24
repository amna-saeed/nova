<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController,WhatsAppController,TestimonialsController,SeoController,HomeController};
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
Route::get('/packages', [HomeController::class, 'packagesPage'])->name('packages');
Route::get('/customer-center', [HomeController::class, 'customerPage'])->name('customer-center');
Route::get('/customer-care', [HomeController::class, 'carePage'])->name('customer-care');
Route::get('/career', [HomeController::class, 'careerPage'])->name('career');
Route::get('/privacy-policy', [HomeController::class, 'privacyPage'])->name('privacy-policy');
Route::get('/terms-condition', [HomeController::class, 'termsPage'])->name('terms-condition');
Route::get('/payment', [HomeController::class, 'PaymentPage'])->name('payment');
// services
Route::get('/internet', [HomeController::class, 'internetPage'])->name('internet');

Route::post('/webhook/whatsapp', [WhatsAppController::class, 'handleIncoming']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

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
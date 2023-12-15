<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\LoginAPIController;
/*
|------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Login using google
Route::get('/auth/google', [LoginAPIController::class, 'googleLogin'])->name('google-login');
Route::any('auth/google/callback', [LoginAPIController::class, 'callBackFromGoolge'])->name('google-callback');
Route::get('/dashboard', function () { return view('user.dashboard');})->name('dashboard');

//Home page routing
Route::get('/', function () { return view('index');});
Route::get('/home', function () { return view('home');});
Route::get('/contact-us', function () { return view('contact-us');});
Route::get('/about-us', function () { return view('about-us');});
Route::get('/deals', function () { return view('deals');});
Route::get('/blog', function () { return view('blog');});
Route::get('/help', function () { return view('help');});
Route::get('/terms-and-condotions', function () { return view('terms-and-condotions');});
Route::get('/faqs', function () { return view('faqs');});
Route::get('/privacy-policy', function () { return view('privacy-policy');});
Route::get('/legal-desclaimer', function () { return view('legal-desclaimer');});
Route::get('/my-account', function () { return view('my-account');});
Route::get('/personal-information', function () { return view('personal-information');});
Route::get('/address', function () { return view('address');});
Route::get('/orders', function () { return view('orders');});
Route::get('/wish-list', function () { return view('wish-list');});
Route::get('/track-order', function () { return view('track-order');});
Route::get('/userLogin', function () { return view('track-order');})->name('userLogin');

//User routing


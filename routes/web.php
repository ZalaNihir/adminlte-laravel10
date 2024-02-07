<?php

use App\Http\Controllers\LoginWithOTPController;
use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Login with OTP Routes
Route::prefix('/otp')->middleware('guest')->name('otp.')->controller(LoginWithOTPController::class)->group(function(){
    Route::get('/login','login')->name('login');
    Route::post('/generate','generate')->name('generate');
    Route::get('/verification/{userId}','verification')->name('verification');
    Route::post('login/verification','loginWithOtp')->name('loginWithOtp');
});

// Socialite Routes
Route::get('oauth/github/login',[SocialiteController::class,'redirectToGithub'])->name('github.login');
Route::get('oauth/github/login/callback',[SocialiteController::class,'HandleGithubCallBack'])->name('github.callback');

Route::get('oauth/google/login',[SocialiteController::class,'redirectToGoogle'])->name('google.login');
Route::get('oauth/google/login/callback',[SocialiteController::class,'HandleGoogleCallBack'])->name('google.callback');

Route::get('oauth/facebook/login',[SocialiteController::class,'redirectToFaceBook'])->name('facebook.login');
Route::get('oauth/facebook/login/callback',[SocialiteController::class,'HandleFaceBookCallBack'])->name('facebook.callback');



// Auth routes
require __DIR__.'/auth.php';
// Admin Routes
require('admin.php');

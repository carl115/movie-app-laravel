<?php

use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Support\Facades\Route;

/* Login */
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login');

    //Logout
    Route::post('/logout', 'logout')->name('logout');
});
/*-/-*/

/* Registration */
Route::controller(RegisterController::class)->group(function () {
    Route::get('register', 'showRegistrationForm')->name('register');
    Route::post('register', 'register');
});
/*-/-*/

/* resetPassword */
Route::controller(ForgotPasswordController::class)->group(function () {
    Route::get('password/reset', 'showLinkRequestForm')
        ->name('password.request');
    Route::post('password/email', 'sendResetLinkEmail')
        ->name('password.email');
    Route::get('password/reset/{token}', 'showResetForm')
        ->name('password.reset');
    Route::post('password/reset', 'reset')->name('password.update');
});
/*-/-*/

/* ConfirmPassword */
Route::controller(ConfirmPasswordController::class)->group(function () {
    Route::get('password/confirm', 'showConfirmForm')
        ->name('password.confirm');
    Route::post('password/confirm', 'confirm');
});
/*-/-*/

/* EmailVerification */
Route::controller(VerificationController::class)->group(function () {
    Route::get('email/verify', 'show')->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', 'verify')
        ->name('verification.verify');
    Route::post('email/resend', 'resend')->name('verification.resend');
});
/*-/-*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

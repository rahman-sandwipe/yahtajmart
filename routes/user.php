<?php

use App\Http\Middleware\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
// Middleware Class 
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Frontend\ShoppingCartController;

Route::group(['prefix'=>'customer','middleware'=>'guest'],function(){
    // Login
    Route::get('login',       [AuthenticatedSessionController::class, 'create'])->name('user.login');
    Route::post('login',      [AuthenticatedSessionController::class, 'store']);
    // Register
    Route::get('register',    [RegisteredUserController::class, 'create'])->name('user.register');
    Route::post('register',   [RegisteredUserController::class, 'store']);

    Route::get('forgot-password',           [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('forgot-password',          [PasswordResetLinkController::class, 'store'])->name('password.email');

    Route::get('reset-password/{token}',    [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password',           [NewPasswordController::class, 'store'])->name('password.store');
});

Route::group(['prefix'=>'customer','middleware'=>User::class],function() {
    Route::get('/',                     [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard',            [DashboardController::class, 'dashboard'])->name('user.dashboard');
    Route::get('new/user',              [RegisteredUserController::class, 'createUser'])->name('newuser');
    Route::post('new/user',             [RegisteredUserController::class, 'storeUser']);
    Route::get('/users',                [RegisteredUserController::class, 'users'])->name('users');
    Route::get('/user/status/{id}',     [RegisteredUserController::class, 'userStatus'])->name('userStatus');
    Route::get('/user/type/{id}',       [RegisteredUserController::class, 'userType'])->name('userType');
    

    Route::get('confirm-password',  [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password',          [PasswordController::class, 'update'])->name('password.update');
    Route::post('logout',           [AuthenticatedSessionController::class, 'destroy'])->name('user.logout');

    Route::get('/profile',          [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile',        [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile',       [ProfileController::class, 'destroy'])->name('profile.destroy');
    


    // Authentication
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::controller(ShoppingCartController::class)->group(function(){
        Route::get('shipping/carts',         'productCart')->name('shipping.cart');
        Route::get('/add-to-card/{id}',      'addToCart')->name('addToCart');
        Route::post('incrementQty/{id}',     'incrementQty')->name('incrementQty');
        Route::post('decrementQty/{id}',     'decrementQty')->name('decrementQty');
        Route::delete('remove-from-cart',    'remove')->name('remove_from_cart');
        
        Route::get('shipping/checkout',  'checkoutShipping')->name('shipping.checkout');
    });
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\PhotoController;
use App\Http\Controllers\Backend\VideoController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\FeedbackController;
use App\Http\Controllers\Backend\PartialsController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ContactController;

Route::group(['prefix'=>'seller','middleware'=>'guest:admin'], function () {
    Route::get('login',                     [AuthenticatedSessionController::class, 'create'])
                                            ->name('login');
    Route::post('login',                    [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password',           [PasswordResetLinkController::class, 'create'])
                                            ->name('password.request');
    Route::post('forgot-password',          [PasswordResetLinkController::class, 'store'])
                                            ->name('password.email');

    Route::get('reset-password/{token}',    [NewPasswordController::class, 'create'])
                                            ->name('password.reset');
    Route::post('reset-password',           [NewPasswordController::class, 'store'])
                                            ->name('password.store');
});

Route::group(['prefix'=>'seller','middleware'=>'auth:admin'],function() {
    Route::get('/',                     [DashboardController::class, 'admin'])->name('seller');
    Route::get('/dashboard',            [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('new/user',              [RegisteredUserController::class, 'createUser'])->name('newuser');
    Route::post('new/user',             [RegisteredUserController::class, 'storeUser']);
    Route::get('/users',                [RegisteredUserController::class, 'users'])->name('users');
    Route::get('/user/status/{id}',     [RegisteredUserController::class, 'userStatus'])->name('userStatus');
    Route::get('/user/type/{id}',       [RegisteredUserController::class, 'userType'])->name('userType');
    
    // Product Controller
    Route::get('/products',             [ProductController::class, 'index'])->name('product.index');
    Route::get('new/product',           [ProductController::class, 'create'])->name('product.create');
    Route::post('new/product',          [ProductController::class, 'store']);
    Route::get('/product/status/{id}',  [ProductController::class, 'status'])->name('product.status');
    Route::get('edit/product/{id}',     [ProductController::class, 'edit'])->name('product.edit');
    Route::post('edit/product/{id}',    [ProductController::class, 'update']);
    Route::get('/product/delete/{id}',  [ProductController::class, 'destroy'])->name('product.destroy');
    
    // Brand Controller
    Route::get('/brands',               [BrandController::class, 'index'])->name('brand.index');
    Route::get('new/brand',             [BrandController::class, 'create'])->name('brand.create');
    Route::post('new/brand',            [BrandController::class, 'store']);
    Route::get('/brand/status/{id}',    [BrandController::class, 'status'])->name('brand.status');
    Route::get('edit/brand/{id}',       [BrandController::class, 'edit'])->name('brand.edit');
    Route::post('edit/brand/{id}',      [BrandController::class, 'update']);
    Route::get('/brand/delete/{id}',    [BrandController::class, 'destroy'])->name('brand.destroy');

    // Category Controller
    Route::get('/category',             [CategoryController::class, 'index'])->name('category.index');
    Route::get('new/category',          [CategoryController::class, 'create'])->name('category.create');
    Route::post('new/category',         [CategoryController::class, 'store']);
    Route::get('/category/status/{id}', [CategoryController::class, 'status'])->name('category.status');
    Route::get('edit/category/{id}',    [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('edit/category/{id}',   [CategoryController::class, 'update']);
    Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    
    // Banner Controller
    Route::get('/banner',               [BannerController::class, 'index'])->name('banner.index');
    Route::get('new/banner',            [BannerController::class, 'create'])->name('banner.create');
    Route::post('new/banner',           [BannerController::class, 'store']);
    Route::get('/banner/status/{id}',   [BannerController::class, 'status'])->name('banner.status');
    Route::get('edit/banner/{id}',      [BannerController::class, 'edit'])->name('banner.edit');
    Route::post('edit/banner/{id}',     [BannerController::class, 'update']);
    Route::get('/banner/delete/{id}',   [BannerController::class, 'destroy'])->name('banner.destroy');
    
    // Blog Controller
    Route::get('/blogs',                [BlogController::class, 'index'])->name('blog.index');
    Route::get('new/blog',              [BlogController::class, 'create'])->name('blog.create');
    Route::post('new/blog',             [BlogController::class, 'store']);
    Route::get('/blog/status/{id}',     [BlogController::class, 'status'])->name('blog.status');
    Route::get('edit/blog/{id}',        [BlogController::class, 'edit'])->name('blog.edit');
    Route::post('edit/blog/{id}',       [BlogController::class, 'update']);
    Route::get('/blog/delete/{id}',     [BlogController::class, 'destroy'])->name('blog.destroy');
    
    // Photo Controller
    Route::get('/photos',               [PhotoController::class, 'index'])->name('photo.index');
    Route::get('new/photo',             [PhotoController::class, 'create'])->name('photo.create');
    Route::post('new/photo',            [PhotoController::class, 'store']);
    Route::get('/photo/status/{id}',    [PhotoController::class, 'status'])->name('photo.status');
    Route::get('edit/photo/{id}',       [PhotoController::class, 'edit'])->name('photo.edit');
    Route::post('edit/photo/{id}',      [PhotoController::class, 'update']);
    Route::get('/photo/delete/{id}',    [PhotoController::class, 'destroy'])->name('photo.destroy');

    // Video Controller
    Route::get('/videos',               [VideoController::class, 'index'])->name('video.index');
    Route::get('new/video',             [VideoController::class, 'create'])->name('video.create');
    Route::post('new/video',            [VideoController::class, 'store']);
    Route::get('/video/status/{id}',    [VideoController::class, 'status'])->name('video.status');
    Route::get('edit/video/{id}',       [VideoController::class, 'edit'])->name('video.edit');
    Route::post('edit/video/{id}',      [VideoController::class, 'update']);
    Route::get('/video/delete/{id}',    [VideoController::class, 'destroy'])->name('video.destroy');
    
    // Feedback Controller
    Route::get('/feedback',             [FeedbackController::class, 'index'])->name('feedback.index');
    Route::get('new/feedback',          [FeedbackController::class, 'create'])->name('feedback.create');
    Route::post('new/feedback',         [FeedbackController::class, 'store']);
    Route::get('/feedback/status/{id}', [FeedbackController::class, 'status'])->name('feedback.status');
    Route::get('feedback/edit/{id}',    [FeedbackController::class, 'edit'])->name('feedback.edit');
    Route::post('feedback/edit/{id}',   [FeedbackController::class, 'update']);
    Route::get('/feedback/delete/{id}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');
    
    // AboutController
    Route::get('abouts',                [AboutController::class, 'edit'])->name('admin.abouts');
    Route::post('abouts',               [AboutController::class, 'update']);
    // ContactController
    Route::get('contacts',              [ContactController::class, 'edit'])->name('admin.contacts');
    Route::post('contacts',             [ContactController::class, 'update']);
    
    // PartialsController
    Route::get('/settings',              [PartialsController::class, 'settings'])->name('settings');
    Route::post('social-media/insert',   [PartialsController::class, 'socialInsert'])->name('social.insert');
    Route::post('/social/update/{id}',   [PartialsController::class, 'update'])->name('social.update');
    Route::post('/config-site',          [PartialsController::class, 'configUpdate'])->name('config.update');
    Route::post('/support-center',       [PartialsController::class, 'supportCenter'])->name('supportCenter');


    Route::get('confirm-password',  [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password',          [PasswordController::class, 'update'])->name('password.update');
    Route::post('logout',           [AuthenticatedSessionController::class, 'destroy'])->name('logout');

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

});

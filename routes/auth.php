<?php

use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\PhotoController;
use App\Http\Controllers\Backend\VideoController;
use App\Http\Controllers\Country\ThanaController;
use App\Http\Controllers\Partials\FAQsController;
use App\Http\Controllers\Admin\PasswordController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\FeedbackController;
use App\Http\Controllers\Backend\PartialsController;
use App\Http\Controllers\Country\DistrictController;
use App\Http\Controllers\Country\DivisionController;
use App\Http\Controllers\Admin\NewPasswordController;
use App\Http\Controllers\Admin\RegisteredUserController;
use App\Http\Controllers\Admin\PasswordResetLinkController;
use App\Http\Controllers\Admin\ConfirmablePasswordController;
use App\Http\Controllers\Admin\AuthenticatedSessionController;
use App\Http\Controllers\Partials\SettingsController;

Route::group(['prefix'=>'admin','middleware'=>'guest:admin'], function () {
    Route::get('login',                     [AuthenticatedSessionController::class, 'create'])
                                            ->name('admin.login');
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

Route::group(['prefix'=>'admin','middleware'=>Admin::class],function() {
    Route::get('/',                     [DashboardController::class, 'admin'])->name('admin');
    Route::get('/dashboard',            [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('new/user',              [RegisteredUserController::class, 'createUser'])->name('newuser');
    Route::post('new/user',             [RegisteredUserController::class, 'storeUser']);
    Route::get('/users',                [RegisteredUserController::class, 'users'])->name('users');
    Route::get('/user/status/{id}',     [RegisteredUserController::class, 'userStatus'])->name('userStatus');
    Route::get('/user/type/{id}',       [RegisteredUserController::class, 'userType'])->name('userType');
    
    // Product Controller
    Route::controller(ProductController::class)->name('product.')->group(function(){
        Route::get('/products',              'index')->name('index');
        Route::get('new/product',            'create')->name('create');
        Route::post('new/product',           'store');
        Route::get('/product/status/{id}',   'status')->name('status');
        Route::get('edit/product/{id}',      'edit')->name('edit');
        Route::post('edit/product/{id}',     'update');
        Route::get('/product/delete/{id}',   'destroy')->name('destroy');
    });

    
    // Brand Controller
    Route::controller(BrandController::class)->group(function(){
        Route::get('/brands',                'index')->name('brand.index');
        Route::get('new/brand',              'create')->name('brand.create');
        Route::post('new/brand',             'store');
        Route::get('/brand/status/{id}',     'status')->name('brand.status');
        Route::get('edit/brand/{id}',        'edit')->name('brand.edit');
        Route::post('edit/brand/{id}',       'update');
        Route::get('/brand/delete/{id}',     'destroy')->name('brand.destroy');
    });


    // Category Controller
    Route::controller(CategoryController::class)->group(function(){
        Route::get('/category',             'index')->name('category.index');
        Route::get('new/category',          'create')->name('category.create');
        Route::post('new/category',         'store');
        Route::get('/category/status/{id}', 'status')->name('category.status');
        Route::get('edit/category/{id}',    'edit')->name('category.edit');
        Route::post('edit/category/{id}',   'update');
        Route::get('/category/delete/{id}', 'destroy')->name('category.destroy');
    });
    
    // Division Controller
    Route::controller(DivisionController::class)->group(function(){
        // ...
        Route::get('/division',            'index')->name('division.index');
        Route::post('new/division',        'store')->name('division.create');
        Route::get('/division/status/{id}','status')->name('division.status');
        Route::get('edit/division/{id}',   'edit')->name('division.edit');
        Route::post('edit/division/{id}',  'update');
        Route::get('/division/delete/{id}','destroy')->name('division.destroy');
    });


    // District Controller
    Route::controller(DistrictController::class)->group(function(){
        Route::get('/district',             'index')->name('district.index');
        Route::post('new/district',         'store')->name('district.create');
        Route::get('/district/status/{id}', 'status')->name('district.status');
        Route::get('edit/district/{id}',    'edit')->name('district.edit');
        Route::post('edit/district/{id}',   'update');
        Route::get('/district/delete/{id}', 'destroy')->name('district.destroy');
    });


    // Thana Controller
    Route::controller(ThanaController::class)->group(function(){
        Route::get('/thana',                    'index')->name('thana.index');
        Route::post('new/thana',                'store')->name('thana.create');
        Route::get('/thana/status/{id}',        'status')->name('thana.status');
        Route::get('edit/thana/{id}',           'edit')->name('thana.edit');
        Route::post('edit/thana/{id}',          'update');
        Route::get('/thana/delete/{id}',        'destroy')->name('thana.destroy');
    });
    
    // Banner Controller
    Route::controller(BannerController::class)->group(function(){
        Route::get('/banner',               'index')->name('banner.index');
        Route::get('new/banner',            'create')->name('banner.create');
        Route::post('new/banner',           'store');
        Route::get('/banner/status/{id}',   'status')->name('banner.status');
        Route::get('edit/banner/{id}',      'edit')->name('banner.edit');
        Route::post('edit/banner/{id}',     'update');
        Route::get('/banner/delete/{id}',   'destroy')->name('banner.destroy');
    });
    
    // Blog Controller
    Route::controller(BlogController::class)->group(function(){
        Route::get('/blogs',               'index')->name('blog.index');
        Route::get('new/blog',             'create')->name('blog.create');
        Route::post('new/blog',            'store');
        Route::get('/blog/status/{id}',    'status')->name('blog.status');
        Route::get('edit/blog/{id}',       'edit')->name('blog.edit');
        Route::post('edit/blog/{id}',      'update');
        Route::get('/blog/delete/{id}',    'destroy')->name('blog.destroy');
    });
    
    // Photo Controller
    Route::controller(PhotoController::class)->group(function(){
        Route::get('/photos',               'index')->name('photo.index');
        Route::get('new/photo',             'create')->name('photo.create');
        Route::post('new/photo',            'store');
        Route::get('/photo/status/{id}',    'status')->name('photo.status');
        Route::get('edit/photo/{id}',       'edit')->name('photo.edit');
        Route::post('edit/photo/{id}',      'update');
        Route::get('/photo/delete/{id}',    'destroy')->name('photo.destroy');
    });

    // Video Controller
    Route::controller(VideoController::class)->group(function(){
        Route::get('/videos',               'index')->name('video.index');
        Route::get('new/video',             'create')->name('video.create');
        Route::post('new/video',            'store');
        Route::get('/video/status/{id}',    'status')->name('video.status');
        Route::get('edit/video/{id}',       'edit')->name('video.edit');
        Route::post('edit/video/{id}',      'update');
        Route::get('/video/delete/{id}',    'destroy')->name('video.destroy');
    });
    
    // Feedback Controller
    Route::controller(FeedbackController::class)->group(function(){
        Route::get('/feedback',             'index')->name('feedback.index');
        Route::get('new/feedback',          'create')->name('feedback.create');
        Route::post('new/feedback',         'store');
        Route::get('/feedback/status/{id}', 'status')->name('feedback.status');
        Route::get('feedback/edit/{id}',    'edit')->name('feedback.edit');
        Route::post('feedback/edit/{id}',   'update');
        Route::get('/feedback/delete/{id}', 'destroy')->name('feedback.destroy');
    });
    
    // AboutController
    Route::get('abouts',                [AboutController::class, 'edit'])->name('admin.abouts');
    Route::post('abouts',               [AboutController::class, 'update']);
    // ContactController
    Route::get('contacts',              [ContactController::class, 'edit'])->name('admin.contacts');
    Route::post('contacts',             [ContactController::class, 'update']);
    
    // SettingsController
    Route::controller(SettingsController::class)->group(function(){
        Route::get('/config-site',   'configSettings')->name('config.settings');
        Route::post('/config-site',  'configUpdate');
    });




    // PartialsController
    Route::controller(PartialsController::class)->group(function(){
        Route::get('/settings',              'settings')->name('settings');
        Route::post('social-media/insert',   'socialInsert')->name('social.insert');
        Route::post('/social/update/{id}',   'update')->name('social.update');
        Route::post('/support-center',       'supportCenter')->name('supportCenter');
    });

    // FAQsController
    Route::controller(FAQsController::class)->group(function(){
        Route::get('/faqs',                 'index')->name('faqs.index');
        Route::get('new/faqs',              'create')->name('faqs.create');
        Route::post('new/faqs',             'store');
        Route::get('/faqs/status/{id}',     'status')->name('faqs.status');
        Route::get('edit/faqs/{id}',        'edit')->name('faqs.edit');
        Route::post('edit/faqs/{id}',       'update');
        Route::get('/faqs/delete/{id}',     'destroy')->name('faqs.destroy');
    });


    Route::get('confirm-password',  [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password',          [PasswordController::class, 'update'])->name('password.update');
    Route::post('logout',           [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');

    Route::get('/profile',          [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile',        [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile',       [ProfileController::class, 'destroy'])->name('profile.destroy');
});

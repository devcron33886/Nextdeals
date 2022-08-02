<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('welcome');
Route::get('/shop', \App\Http\Controllers\ShopController::class)->name('shop');
Route::get('/categories/{category:slug}', CategoryController::class)->name('category-show');
Route::get('/tags/{tag:slug}', TagController::class)->name('tag-show');
Route::get('/products/{product:slug}', ProductController::class)->name('product-show');
Route::get('/location/{location:slug}', LocationController::class)->name('location-show');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact');
Route::get('/about-us', AboutController::class)->name('about-us');

Route::get('userVerification/{token}', [\App\Http\Controllers\UserVerificationController::class, 'approve'])->name('userVerification');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', '2fa', 'admin']], function () {
    Route::get('/', \App\Http\Controllers\Admin\HomeController::class)->name('home');
    // Permissions
    Route::delete('permissions/destroy', [\App\Http\Controllers\Admin\PermissionsController::class, 'massDestroy'])->name('permissions.massDestroy');
    Route::resource('permissions', \App\Http\Controllers\Admin\PermissionsController::class);

    // Roles
    Route::delete('roles/destroy', [\App\Http\Controllers\Admin\RolesController::class, 'massDestroy'])->name('roles.massDestroy');
    Route::resource('roles', \App\Http\Controllers\Admin\RolesController::class);

    // Users
    Route::delete('users/destroy', [\App\Http\Controllers\Admin\UsersController::class, 'massDestroy'])->name('users.massDestroy');
    Route::resource('users', \App\Http\Controllers\Admin\UsersController::class);

    // Product Category
    Route::delete('categories/destroy', [\App\Http\Controllers\Admin\ProductController::class, 'massDestroy'])->name('categories.massDestroy');
    Route::post('categories/media', [\App\Http\Controllers\Admin\ProductController::class, 'storeMedia'])->name('categories.storeMedia');
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);

    // Product Tag
    Route::delete('tags/destroy', [\App\Http\Controllers\Admin\TagController::class, 'massDestroy'])->name('tags.massDestroy');
    Route::resource('tags', \App\Http\Controllers\Admin\TagController::class);

    // Product
    Route::delete('products/destroy', [\App\Http\Controllers\Admin\ProductController::class, 'massDestroy'])->name('products.massDestroy');
    Route::post('products/media', [\App\Http\Controllers\Admin\ProductController::class, 'storeMedia'])->name('products.storeMedia');
    Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);

    // Location
    Route::delete('locations/destroy', [\App\Http\Controllers\Admin\LocationController::class, 'massDestroy'])->name('locations.massDestroy');
    Route::resource('locations', \App\Http\Controllers\Admin\LocationController::class);

    // Order
    Route::delete('orders/destroy', [\App\Http\Controllers\Admin\OrderController::class, 'massDestroy'])->name('orders.massDestroy');
    Route::resource('orders', \App\Http\Controllers\Admin\OrderController::class);

    // Shipping Type
    Route::delete('shipping-types/destroy', [\App\Http\Controllers\Admin\ShippingTypeController::class, 'massDestroy'])->name('shipping-types.massDestroy');
    Route::resource('shipping-types', \App\Http\Controllers\Admin\ShippingTypeController::class);

    // Payment Method
    Route::delete('payment-methods/destroy', [\App\Http\Controllers\Admin\PaymentMethodController::class, 'massDestroy'])->name('payment-methods.massDestroy');
    Route::resource('payment-methods', \App\Http\Controllers\Admin\PaymentMethodController::class);

    // Stock
    Route::delete('stocks/destroy', [\App\Http\Controllers\Admin\StockController::class, 'massDestroy'])->name('stocks.massDestroy');
    Route::resource('stocks', \App\Http\Controllers\Admin\StockController::class);

    // Vendors
    Route::resource('vendors', \App\Http\Controllers\Admin\VendorsController::class);

    // Profiles
    Route::delete('profiles/destroy', [\App\Http\Controllers\Admin\ProfilesController::class, 'massDestroy'])->name('profiles.massDestroy');
    Route::resource('profiles', \App\Http\Controllers\Admin\ProfilesController::class);
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth', '2fa']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', [\App\Http\Controllers\Auth\ChangePasswordController::class, 'edit'])->name('password.edit');
        Route::post('password', [\App\Http\Controllers\Auth\ChangePasswordController::class, 'update'])->name('password.update');
        Route::post('profile', [\App\Http\Controllers\Auth\ChangePasswordController::class, 'updateProfile'])->name('password.updateProfile');
        Route::post('profile/destroy', [\App\Http\Controllers\Auth\ChangePasswordController::class, 'destroy'])->name('password.destroyProfile');
        Route::post('profile/two-factor', [\App\Http\Controllers\Auth\ChangePasswordController::class, 'toggleTwoFactor'])->name('password.toggleTwoFactor');
    }
});

Route::group(['middleware' => ['auth', '2fa']], function () {
    // Two-Factor Authentication
    if (file_exists(app_path('Http/Controllers/Auth/TwoFactorController.php'))) {
        Route::get('two-factor', [\App\Http\Controllers\Auth\TwoFactorController::class, 'check'])->name('twoFactor.check');
        Route::get('two-factor/resend', [\App\Http\Controllers\Auth\TwoFactorController::class, 'resend'])->name('twoFactor.resend');
    }
});

Route::group(['prefix' => 'vendor', 'as' => 'vendor.', 'middleware' => ['auth', '2fa', 'vendor']], function () {
    Route::get('/dashboard', HomeController::class)->name('dashboard');
    Route::resource('orders', \App\Http\Controllers\Vendors\OrderController::class)->except(['create', 'store', 'destroy']);
});

require __DIR__.'/auth.php';

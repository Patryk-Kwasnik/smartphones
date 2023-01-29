<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConfiguratorController;
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
//admin panel logowania
Route::middleware('admin:admin')->group(function () {
    Route::get('admin/login', [AdminController::class, 'loginForm']);
    Route::post('admin/login', [AdminController::class, 'store'])->name('admin.login');
});

// admin panel
Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])
        ->name('dashboard')->middleware('auth:admin');
});
//Admin routes
Route::get('admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

// admin marki
Route::prefix('brand')->group(function(){
    Route::get('/view', [BrandController::class, 'BrandView'])->name('all.brand');
    Route::post('/store', [BrandController::class, 'BrandStore'])->name('brand.store');

    Route::get('/edit/{id}', [BrandController::class, 'BrandEdit'])->name('brand.edit');
    Route::post('/update', [BrandController::class, 'BrandUpdate'])->name('brand.update');

    Route::get('/delete/{id}', [BrandController::class, 'BrandDelete'])->name('brand.delete');
});

// admin produkty
Route::prefix('product')->group(function(){
    Route::get('/add', [ProductController::class, 'AddProductView'])->name('add.product');
    Route::post('/save', [ProductController::class, 'SaveProduct'])->name('product-save');
    Route::get('/view', [ProductController::class, 'ProductsView'])->name('view-products');

    Route::get('/edit/{id}', [ProductController::class, 'EditProduct'])->name('product.edit');
    Route::post('/update', [ProductController::class, 'UpdateProduct'])->name('product-update');

    Route::post('/image/update', [ProductController::class, 'MultiImageUpdate'])->name('update-product-image');
    Route::post('/thumbnail/update', [ProductController::class, 'ThumbnailImageUpdate'])->name('update-product-thumbnail');

    Route::get('/multiimg/delete/{id}', [ProductController::class, 'MultiImageDelete'])->name('product.multiimg.delete');
    Route::get('/delete/{id}', [ProductController::class, 'ProductDelete'])->name('product.delete');
});
// admin zamówienia
Route::prefix('orders')->group(function(){
    Route::get('/details/{id}', [OrderController::class, 'orderDetails'])->name('order.detail');
    Route::get('/view', [OrderController::class, 'OrdersView'])->name('view-orders');
    //ajax zmiana status zamówienia
    Route::post('/change_status', [OrderController::class, 'statusChange'])->name('status-change');
});
// Admin Get All User Routes
Route::prefix('users')->group(function(){
    Route::get('/view', [UserController::class, 'AdminAllUsers'])->name('all-users');
});
//user
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/dashboard', [IndexController::class, 'index']);
});

Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');
Route::get('/user/profile', [UserController::class, 'UserProfile'])->name('user.profile');
Route::get('/my/orders', [UserController::class, 'MyOrders'])->name('my.orders');
Route::get('/user/order_details/{order_id}', [UserController::class, 'OrderDetails']);
// aktualizacja danych
Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store');
Route::get('/user/change/password', [UserController::class, 'UserChangePassword'])->name('change.password');
Route::post('/user/password/update', [UserController::class, 'UserPasswordUpdate'])->name('user.password.update');

Route::get('/detail', function () {
    return view('frontend.detail');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/products', function () {
    return view('admin.products');
})->name('products');

Route::get('/', [IndexController::class, 'index']);
Route::get('/', [IndexController::class, 'index'])->name('index');
//produkty
Route::get('/product/details/{id}/{slug}', [IndexController::class, 'ProductDetails']);
Route::get('/brands/{brand_id}/{slug}', [IndexController::class, 'BrandProduct']);
//konfigurator
Route::get('/configurator', [ConfiguratorController::class, 'initConfigurator']);
Route::post('/configurator/search', [ConfiguratorController::class, 'searchProduct']);
//koszyk mini-ajax
Route::post('/cart/data/store/{id}', [CartController::class, 'AddToCart']);
Route::get('/product/mini/cart/', [CartController::class, 'AddMiniCart']);
Route::get('/minicart/product-remove/{rowId}', [CartController::class, 'RemoveMiniCart']);

//koszyk główny
Route::get('/mycart', [CartController::class, 'MyCart'])->name('mycart');
Route::get('/get-cart-product', [CartController::class, 'GetCartProduct']);
Route::get('/cart-remove/{rowId}', [CartController::class, 'RemoveCartProduct']);
//zamówienie
Route::get('/checkout', [CartController::class, 'CheckoutCreate'])->name('checkout');
Route::post('/checkout/store', [OrderController::class, 'addOrder'])->name('addOrder');

// Route::get('/user/logout', [BrandController::class, 'Logout'])->name('user.logout');

// /// Chanage Password and user Profile Route
// Route::get('/user/password', [ChangePass::class, 'CPassword'])->name('change.password');
// Route::post('/password/update', [ChangePass::class, 'UpdatePassword'])->name('password.update');

// // User Profile
// Route::get('/user/profile', [ChangePass::class, 'PUpdate'])->name('profile.update');
// Route::post('/user/profile/update', [ChangePass::class, 'UpdateProfile'])->name('update.user.profile');

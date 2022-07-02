<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
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
    Route::get('/admin/dashboard', function () {
        return view('admin.index');
    })->name('dashboard')->middleware('auth:admin');
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

//user
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
 
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('frontend.index');
// })->name('dashboard');

Route::get('/detail', function () {
    return view('frontend.detail');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/products', function () {
    return view('admin.products');
})->name('products');

Route::get('/', function () {
    return view('frontend.index');
});
// Route::get('/user/logout', [BrandController::class, 'Logout'])->name('user.logout');

// /// Chanage Password and user Profile Route 
// Route::get('/user/password', [ChangePass::class, 'CPassword'])->name('change.password');
// Route::post('/password/update', [ChangePass::class, 'UpdatePassword'])->name('password.update');

// // User Profile 
// Route::get('/user/profile', [ChangePass::class, 'PUpdate'])->name('profile.update');
// Route::post('/user/profile/update', [ChangePass::class, 'UpdateProfile'])->name('update.user.profile');
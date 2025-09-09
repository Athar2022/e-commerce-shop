<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// Welcome route

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop', [ShopController::class, 'index']);


Route::get('/', [StoreController::class, 'index'])->name('shop.index');
Route::get('/products', [StoreController::class, 'index'])->name('shop.products');
Route::get('/product/{id}', [StoreController::class, 'productDetails'])->name('shop.product');
Route::get('/cart', [StoreController::class, 'cart'])->name('shop.cart');
Route::get('/about', [StoreController::class, 'about'])->name('shop.about');
Route::get('/contact', [StoreController::class, 'contact'])->name('shop.contact');


//CRUD router
Route::resource("products", ProductController::class);

//contact router
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');



// Admin routes group
Route::prefix('admin')->name('admin.')->middleware(['auth', 'can:access-admin-panel'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/products', [AdminController::class, 'products'])->name('products');
    Route::get('/categories', [AdminController::class, 'categories'])->name('categories');
});

// Home route (redirect to admin dashboard if authenticated)
Route::get('/', function () {
    return redirect('/admin/dashboard');
});

// require __DIR__.'/auth.php';
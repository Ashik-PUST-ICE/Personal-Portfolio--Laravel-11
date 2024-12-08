<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CVController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

// Public routes
Route::get('/', [HomeController::class, 'user'])->name('user.dashboard');

// Registration routes
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Authenticated routes
Route::middleware(['auth', 'verified'])->group(function () {
    // User dashboard
    Route::get('/', [HomeController::class, 'user'])->name('user.dashboard');

    // Admin dashboard
    Route::get('admin/dashboard', [HomeController::class, 'index'])
        ->middleware('admin')
        ->name('admin.dashboard');

    // Profile management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/about', [HomeController::class, 'about'])->name('user.about');

Route::get('/contact', [HomeController::class, 'contact'])->name('user.contact');

Route::get('/skill', [HomeController::class, 'skill'])->name('user.skill');
Route::get('/view-cv', [CVController::class, 'showCV']);



Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::post('/add_category', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/edit_category/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/update_category/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/delete_category/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');



Route::get('add_product', [ProductController::class, 'showAddProductForm']);
Route::post('add_product', [ProductController::class, 'addProduct'])->name('admin.add_product');

Route::get('/admin/products', [ProductController::class, 'showProducts'])->name('admin.show_products');
Route::get('/admin/products/edit/{id}', [ProductController::class, 'editProduct'])->name('admin.edit_product');
Route::post('/admin/products/update/{id}', [ProductController::class, 'updateProduct'])->name('admin.update_product');
Route::get('/admin/products/delete/{id}', [ProductController::class, 'deleteProduct'])->name('admin.delete_product');


Route::get('/Products', [HomeController::class, 'Products']);




require __DIR__.'/auth.php';








<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProdcutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get("users",[UserController::class,'index'])->name("users.index");
    Route::get("users-create",[UserController::class,'create'])->name("users.create");
    Route::post("users-store",[UserController::class,'store'])->name("users.store");
    Route::get("roles",[RoleController::class,'index'])->name("role.index");
    Route::get("roles-create",[RoleController::class,'create'])->name("role.create");
    Route::post("roles-store",[RoleController::class,'store'])->name("role.store");
    Route::get("products",[ProdcutController::class,'index'])->name("product.index");
    Route::get("products-create",[ProdcutController::class,'create'])->name("product.create");
    Route::post("products-store",[ProdcutController::class,'store'])->name("product.store");
    Route::get("products-edit",[ProdcutController::class,'edit'])->name("product.edit");
    Route::put("product-update/{product}",[ProdcutController::class,'update'])->name("product.update");
   Route::delete('product/{product}', [ProdcutController::class, 'destroy'])
    ->name('product.destroy');

    Route::get('/send-email', [EmailController::class, 'sendEmail']);
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])
    ->name('users.edit');
    Route::put('/users/{id}/update', [UserController::class, 'update'])
    ->name('users.update');
});

require __DIR__.'/auth.php';

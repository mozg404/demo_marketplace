<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Cabinet\ProfileController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/test', [TestController::class, 'test']);

Route::get('/cabinet/profile', [ProfileController::class, 'show'])->name('profile.show');

Route::get('/product/{product}', [ProductsController::class, 'show'])->name('product.show');
Route::get('/catalog', [CatalogController::class, 'show'])->name('catalog');


Route::post('/registration/store', [RegistrationController::class, 'store'])->name('auth.registration.store');
Route::get('/registration', [RegistrationController::class, 'show'])->name('auth.registration.show');
Route::post('/login/store', [LoginController::class, 'store'])->name('login.store');
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::get('/logout', LogoutController::class)->name('logout');

Route::get('/', IndexController::class)->name('index');

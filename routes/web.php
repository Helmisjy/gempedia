<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameCatalogController;

Route::get('/', [App\Http\Controllers\LandingPageController::class, 'home'])->name('home');
Route::get('/landing-page', [App\Http\Controllers\LandingPageController::class, 'index'])->name('landing-page');
Route::get('/home', [App\Http\Controllers\LandingPageController::class, 'home'])->name('home.index');
Route::get('/catalog', [GameCatalogController::class, 'index'])->name('customer.catalog');
Route::post('/orders', [GameCatalogController::class, 'storeOrder'])->name('orders.store');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';

// Routes admin
require __DIR__.'/admin.php';

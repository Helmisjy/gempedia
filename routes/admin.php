<?php

use App\Http\Controllers\Admin\GameController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PlatformController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('platforms', PlatformController::class)->except(['show']);
    Route::resource('genres', GenreController::class)->except(['show']);
    Route::resource('games', GameController::class)->only(['index', 'create', 'store']);
    Route::resource('orders', OrderController::class)->only(['index', 'show', 'update']);
});
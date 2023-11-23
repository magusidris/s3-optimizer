<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DownloadController;

Route::get('/', HomeController::class)->name('home');

Route::resource('products', ProductController::class);

Route::get('login', LoginController::class)->name('login');
Route::get('logout', LogoutController::class)->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('download/{file}', DownloadController::class)->name('documents.download');
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile');
    Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');
});

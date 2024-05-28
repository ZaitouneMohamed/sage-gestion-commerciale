<?php

use App\Http\Controllers\Dashboard\CategorieController;
use App\Http\Controllers\Dashboard\CustomarController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\SupplierController;
use Illuminate\Support\Facades\Route;

Route::middleware("auth")->name("admin.")->prefix('admin')->group(function () {
    Route::controller(HomeController::class)->group(function(){
        Route::get('/' , 'index')->name('home');
    });
    Route::resource('categorie', CategorieController::class);
    Route::resource('customer', CustomarController::class);
    Route::resource('supplier', SupplierController::class);
});

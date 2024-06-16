<?php

use App\Http\Controllers\Dashboard\CategorieController;
use App\Http\Controllers\Dashboard\CustomarController;
use App\Http\Controllers\Dashboard\ExcelImportExportController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\OrderController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\SupplierController;
use Illuminate\Support\Facades\Route;

Route::middleware("auth")->name("admin.")->prefix('admin')->group(function () {
    Route::controller(HomeController::class)->group(function(){
        Route::get('/' , 'index')->name('home');
    });
    Route::controller(ExcelImportExportController::class)->name('excel.')->group(function(){
        Route::post('importProduct' , 'ImportProducts')->name('import.product');
    });
    Route::resource('categorie', CategorieController::class);
    Route::resource('customer', CustomarController::class);
    Route::resource('supplier', SupplierController::class);
    Route::resource('product', ProductController::class);

    // Order Routes
    Route::controller(OrderController::class)->name('order.')->group(function(){
        Route::get('orders-list','OrdersList')->name('list');
        Route::get('orders-create','CreateNewOrder')->name('create');
    });
});

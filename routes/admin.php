<?php

use App\Http\Controllers\Dashboard\CategorieController;
use App\Http\Controllers\Dashboard\CompanyController;
use App\Http\Controllers\Dashboard\CustomarController;
use App\Http\Controllers\Dashboard\ExcelImportExportController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\MouvementController;
use App\Http\Controllers\Dashboard\OrderController;
use App\Http\Controllers\Dashboard\PdfController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\SettingsController;
use App\Http\Controllers\Dashboard\SupplierController;
use Illuminate\Support\Facades\Route;

Route::middleware(["auth", "inertia:app"])->name("admin.")->prefix('admin')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('home');
    });
    Route::controller(ExcelImportExportController::class)->name('excel.')->group(function () {
        Route::post('importProduct', 'ImportProducts')->name('import.product');
    });
    Route::resource('categorie', CategorieController::class);
    Route::resource('customer', CustomarController::class);
    Route::resource('supplier', SupplierController::class);
    Route::resource('product', ProductController::class);
    Route::resource('mouvement', MouvementController::class);

    // Order Routes
    Route::controller(OrderController::class)->name('order.')->group(function () {
        Route::get('orders-list', 'OrdersList')->name('list');
        Route::get('orders-create', 'CreateNewOrder')->name('create');
        Route::post('StoreOrder', 'StoreOrder')->name('StoreOrder');
    });

    Route::controller(CompanyController::class)->name('settings.')->group(function () {
        Route::get('settings', 'index')->name('index');
        Route::post('settings-edit', 'update')->name('update');
    });
    // settings
    Route::controller(SettingsController::class)->name('setting.')->group(function () {
        Route::get('setting', 'index')->name('index');
        Route::post('settings-edit/{setting}', 'UpdateSettings')->name('UpdateSettings');
    });

    Route::controller(PdfController::class)->name('pdf.')->group(function () {
        Route::get('facture/{order}', 'Facture')->name('facture');
    });
});

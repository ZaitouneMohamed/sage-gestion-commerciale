<?php

use App\Http\Controllers\Dashboard\CategorieController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware("auth")->name("admin.")->prefix('admin')->group(function () {
    Route::resource('categorie', CategorieController::class);
});

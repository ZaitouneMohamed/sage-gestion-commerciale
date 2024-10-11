<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(["auth","role:super-admin", "inertia:app"])->prefix('super-admin')->name('super-admin.')->group(function(){
    Route::get('/' , function(){
        return Inertia::render('super-admin/index');
    });
});



<?php

use Illuminate\Support\Facades\Route;

Route::middleware(["SuperAdminRedirection","role:super-admin", "inertia:app"])->name("admin.")->prefix('admin')->group(function () {
    Route::get('/' , function(){
        return "hello super admin";
    });
});

<?php

use App\Http\Controllers\SuperAdmin\PlanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/super-admin/login', function(){
    return Inertia::render("super-admin/auth/Login");
})->name('super-admin.login')->middleware('guest');

Route::post('/super-admin/loginf', function(Request $request){
    $request->validate([
        'email' => 'required|email',  // added the 'email' validation rule as well
        'password' => 'required|min:6'  // added a basic password validation rule
    ]);
})->name('super-admin.loginf');

Route::middleware(["SuperAdminRedirection","role:super-admin", "inertia:app"])->prefix('super-admin')->name('super-admin.')->group(function(){
    Route::get('/' , function(){
        return Inertia::render('super-admin/index');
    })->name('home');
    Route::resource("plan" , PlanController::class);

});



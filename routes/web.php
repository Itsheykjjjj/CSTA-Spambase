<?php

use App\Http\Controllers\Accounts\UserController;
use Illuminate\Support\Facades\Route;

// Dashboard Route
Route::get('/', function () {
    return view('pages.dashboard.dashboard');
})->name('dashboard.index');

// Property & Asset (Stock) Routes
Route::get('/stocks', function () {
    return view('pages.property-asset.stock.template');
});
// Property & Asset (Inventory) Routes

// User Management Routes
Route::controller(UserController::class)->group(function () {
    Route::get('/users/overview', 'index')->name('user.index');
    Route::get('/users/add-user', 'create')->name('user.create');
    Route::post('/users', 'store')->name('user.store');
    Route::get('/users/{id}/edit-user', 'edit')->name('user.edit');
});

// Profile Routes

//Route::controller(AccountController::class)->group(function () {
//    Route::get('/account/profile', 'index')->name('account.index');
//    Route::get('/account/settings', 'edit')->name('account.edit');
//});

// Authentication Routes
//Route::middleware('guest')->group(function () {
//    Route::get('/login', function () {
//        return view('pages.auth.login');
//    });
//});

<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Home\HomeController;
use App\Http\Controllers\Ads\AdController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Admin Routes
Route::prefix('admin')->name('admin.')->group( function () {
    Route::get('/', function () {
        return redirect()->route('admin.home');
    });

    // Admin Auth Protected Routes
    Route::middleware('auth:admin')->group( function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('home', [HomeController::class, 'index'])->name('home');
        Route::resource('admins', AdminController::class);
        Route::resource('users', UserController::class);
        Route::resource('ads', AdController::class);
    });
    // Admin Guest Routes
    Route::middleware('guest:admin')->group( function () {
        Route::get('login', [AuthController::class, 'loginForm'])->name('login.form');
        Route::post('login', [AuthController::class, 'login'])->name('login');
    });
});


// Route::get('test', function () {
//     return view('Admin.Auth.login');
// });
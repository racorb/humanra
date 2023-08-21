<?php

use Illuminate\Support\Facades\Route;

// frontend
use App\Http\Controllers\Frontend\HomeController;

// portal
use App\Http\Controllers\Portal\AuthController;
use App\Http\Controllers\Portal\DashboardController;
use App\Http\Controllers\Portal\HumanResourceController;

// admin
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;





// frontend section
Route::get('/', [HomeController::class, 'index'])->name('index');


// portal section
Route::prefix('portal')->name('portal.')->group(function(){
    Route::middleware(['guest:web'])->group(function(){
        // login
        Route::get('/', [AuthController::class, 'index'])->name('index');   
        Route::post('/', [AuthController::class, 'postIndex'])->name('index.post'); //->middleware('throttle:2,1')

        // register
        Route::get('/register', [AuthController::class, 'register'])->name('register');
        Route::post('/register', [AuthController::class, 'postRegister'])->name('register.post');
    });    

    Route::middleware(['auth:web'])->group(function () {
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        
        // human resource
        Route::prefix('/human-resource')->name('human.resource.')->group(function(){
            Route::get('/', [HumanResourceController::class, 'index'])->name('index');
        });
    });
});

// admin section
Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['guest:admin'])->group(function(){
        // login
        Route::get('/', [AdminAuthController::class, 'index'])->name('index');   
        Route::post('/', [AdminAuthController::class, 'postIndex'])->name('index.post');
    });    

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/logout', [AdminAuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    });
});
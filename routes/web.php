<?php

use Illuminate\Support\Facades\Route;

// frontend
use App\Http\Controllers\Frontend\HomeController;

// portal
use App\Http\Controllers\Portal\AuthController;
use App\Http\Controllers\Portal\DashboardController;
use App\Http\Controllers\Portal\HumanResourceController;
use App\Http\Controllers\Portal\CompanyController;

// admin
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminBankController;
use App\Http\Controllers\Admin\BusinessAreaController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\BusinessPackageController;





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
        Route::post('/check', [AuthController::class, 'check'])->name('check');
    });    

    Route::middleware(['auth:web'])->group(function () {
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        
        // human resource
        Route::prefix('/human-resource')->name('human.resource.')->group(function(){
            Route::get('/', [HumanResourceController::class, 'index'])->name('index');
        });

        // human resource
        Route::prefix('/company')->controller(CompanyController::class)->name('profile.')->group(function(){
            Route::get('/', 'index')->name('index');
            Route::post('/', 'create')->name('create');
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

        // bank
        Route::resource('/bank', AdminBankController::class);
        Route::prefix('/bank')->name('bank.')->group(function(){
            Route::get('/detail/{id}', [AdminBankController::class, 'detail'])->name('detail');
            Route::get('/status/{id}', [AdminBankController::class, 'status'])->name('status');
            Route::get('/delete/{id}', [AdminBankController::class, 'delete'])->name('delete');
        });

        // business area
        Route::prefix('/business-area')->controller(BusinessAreaController::class)->name('business.area.')->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/status/{id}', 'status')->name('status');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::put('/update/{id}', 'update')->name('update');
            Route::get('/delete/{id}', 'delete')->name('delete');
        });

        // packages
        Route::prefix('/packages')->controller(PackageController::class)->name('package.')->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/status/{id}', 'status')->name('status');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::put('/update/{id}', 'update')->name('update');
            Route::get('/delete/{id}', 'delete')->name('delete');
        });

        // business package
        Route::prefix('/business-package')->name('business.package.')->group(function(){
            Route::get('/', [BusinessPackageController::class, 'index'])->name('index');
            Route::post('/store', [BusinessPackageController::class, 'store'])->name('store');
            Route::get('/change', [BusinessPackageController::class, 'change'])->name('change');
            Route::get('/status/{id}', [BusinessPackageController::class, 'status'])->name('status');
            Route::get('/delete/{id}', [BusinessPackageController::class, 'delete'])->name('delete');
        });
        
    });
});
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
    });    

    Route::middleware(['auth:web'])->group(function () {
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/company', [CompanyController::class, 'index'])->name('profile');
        
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

        // bank
        Route::resource('/bank', AdminBankController::class);
        Route::prefix('/bank')->name('bank.')->group(function(){
            Route::get('/detail/{id}', [AdminBankController::class, 'detail'])->name('detail');
            Route::get('/status/{id}', [AdminBankController::class, 'status'])->name('status');
            Route::get('/delete/{id}', [AdminBankController::class, 'delete'])->name('delete');
        });

        // business area
        Route::prefix('/business-area')->name('business.area.')->group(function(){
            Route::get('/', [BusinessAreaController::class, 'index'])->name('index');
            Route::get('/create', [BusinessAreaController::class, 'create'])->name('create');
            Route::post('/store', [BusinessAreaController::class, 'store'])->name('store');
            Route::get('/status/{id}', [BusinessAreaController::class, 'status'])->name('status');
            Route::get('/edit/{id}', [BusinessAreaController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [BusinessAreaController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [BusinessAreaController::class, 'delete'])->name('delete');
        });

        // packages
        Route::prefix('/packages')->name('package.')->group(function(){
            Route::get('/', [PackageController::class, 'index'])->name('index');
            Route::get('/create', [PackageController::class, 'create'])->name('create');
            Route::post('/store', [PackageController::class, 'store'])->name('store');
            Route::get('/status/{id}', [PackageController::class, 'status'])->name('status');
            Route::get('/edit/{id}', [PackageController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [PackageController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [PackageController::class, 'delete'])->name('delete');
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
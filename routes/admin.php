<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\StateController;

Route::group(
    ['prefix' => 'admin'],
    function () {
        Route::get('/login', [AdminController::class, 'login'])->name('admin-login');
        Route::post('/login', [AdminController::class, 'loginPost'])->name('admin-login-post');
        Route::group(
            ['middleware' => 'auth:admin'],
            function () {
                Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');
                Route::get('/logout', [Admincontroller::class, 'adminLogout'])->name('admin-logout');
                Route::get('/state', [StateController::class, 'create'])->name('admin-state-create');
                Route::post('/state', [StateController::class, 'store'])->name('admin-state-store');
                Route::get('/states', [StateController::class, 'index'])->name('admin-state-index');
                Route::get('/city', [CityController::class, 'create'])->name('admin-city-create');
                Route::post('/city', [CityController::class, 'store'])->name('admin-city-store');
                Route::get('/cities', [CityController::class, 'index'])->name('admin-city-index');
                Route::get('/branch', [BranchController::class, 'create'])->name('admin-branch-create');
                Route::post('/branch', [BranchController::class, 'store'])->name('admin-branch-store');
            }
        );
    }
);

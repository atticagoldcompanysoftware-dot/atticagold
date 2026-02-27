<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BranchController;

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
                Route::get('/branch', [BranchController::class, 'create'])->name('admin-branch-create');
                Route::post('/branch', [BranchController::class, 'store'])->name('admin-branch-store');
            }
        );
    }
);

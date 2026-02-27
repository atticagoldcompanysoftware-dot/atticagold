<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::group(
    ['prefix' => 'admin'],
    function () {
        Route::get('/login', [AdminController::class, 'login'])->name('admin-login');
    }
);

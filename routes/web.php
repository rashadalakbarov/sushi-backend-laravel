<?php

use Illuminate\Support\Facades\Route;

// admin
use App\Http\Controllers\admin\AuthAdminController;
use App\Http\Controllers\admin\DashboardAdminController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/index', [AuthAdminController::class, 'index'])->name('admin.index');

Route::get('/admin/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
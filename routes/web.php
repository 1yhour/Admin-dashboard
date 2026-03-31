<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardControl;
Route::redirect('/','/admin/dashboard');
Route::controller(AdminDashboardControl::class)->group(function () {
    Route::get('/admin/dashboard', 'admin')->name('admin.dashboard');
    Route::get('/admin/users', 'user')->name('admin.users');
});
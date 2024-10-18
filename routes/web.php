<?php

use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/admin/pages/login');
});

Route::get('/admin/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/pages/login', [AdminDashboardController::class, 'login']);

// Route for logout
Route::post('/logout', function () {
   return redirect('/admin/pages/login');})->name('logout');
?>
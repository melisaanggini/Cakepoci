<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Semua route web aplikasi kamu didaftarkan di sini.
| Kita sudah pisahkan dashboard sesuai role: admin, staff, dan customer.
|
*/

Route::get('/', function () {
    return view('auth.login');
});

// Default Dashboard -> otomatis redirect sesuai role user
Route::get('/dashboard', function () {
    if (auth()->user()->role === 'admin') {
        return redirect()->route('dashboard.admin');
    } elseif (auth()->user()->role === 'staff') {
        return redirect()->route('dashboard.staff');
    } else {
        return redirect()->route('dashboard.customer');
    }
})->middleware(['auth'])->name('dashboard');

// Dashboard untuk Admin
Route::get('/dashboard/admin', [DashboardController::class, 'admin'])
    ->name('dashboard.admin')
    ->middleware('auth');

// CRUD Produk untuk Admin
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/create', [ProductController::class, 'create'])->name('admin.create');
    Route::post('/store', [ProductController::class, 'store'])->name('admin.store');
});

// Dashboard untuk Staff
Route::get('/dashboard/staff', function () {
    return view('dashboard.staff');
})->middleware(['auth'])->name('dashboard.staff');

// Dashboard untuk Customer
Route::get('/dashboard/customer', function () {
    return view('dashboard.customer');
})->middleware(['auth'])->name('dashboard.customer');

// Route bawaan auth (login, register, dll)
require __DIR__.'/auth.php';

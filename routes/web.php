<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\clientController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::middleware(['auth', 'role:agent'])->group(function(){
    Route::get('/superadmin/dashboard', [SuperadminController::class, 'dashboard'])->name('superadmin.dashboard');
});

Route::middleware(['auth', 'role:agent'])->group(function(){
    Route::get('/vendor/dashboard', [VendorController::class, 'dashboard'])->name('vendor.dashboard');
});

Route::middleware(['auth', 'role:agent'])->group(function(){
    Route::get('/courier/dashboard', [CourierController::class, 'dashboard'])->name('courier.dashboard');
});

Route::middleware(['auth', 'role:agent'])->group(function(){
    Route::get('/client/dashboard', [clientController::class, 'dashboard'])->name('client.dashboard');
});



require __DIR__.'/auth.php';

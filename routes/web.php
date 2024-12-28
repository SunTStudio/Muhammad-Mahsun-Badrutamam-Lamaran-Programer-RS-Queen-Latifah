<?php

use App\Http\Controllers\ObatController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('login', function () {
    return view('auth.login');
})->name('login');
Route::post('login', [UserController::class, 'auth'])->name('login.auth');
Route::middleware('auth')->group(function () {
Route::get('dashboard', [UserController::class, 'index'])->name('rs.dashboard');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::get('create-obat', [ObatController::class, 'create'])->name('create.obat');
Route::post('store-obat', [ObatController::class, 'store'])->name('store.obat');
Route::get('edit-obat/{id}', [ObatController::class, 'edit'])->name('edit.obat');
Route::post('update-obat/{id}', [ObatController::class, 'update'])->name('update.obat');
Route::get('delete-obat/{id}', [ObatController::class, 'destroy'])->name('delete.obat');
Route::get('profile', [UserController::class, 'profile'])->name('rs.profile');
Route::get('edit-profile', [UserController::class, 'edit'])->name('edit.profile');
});



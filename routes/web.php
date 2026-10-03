<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index'])->name('login');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware('login')->group(function () {

    Route::resource('ruangan', RuanganController::class);
    Route::resource('barang', BarangController::class);
    Route::resource('inventaris', InventarisController::class);

    Route::get('dasboard', function () {return view('dasboard.index');})->name('dasboard.index');

});

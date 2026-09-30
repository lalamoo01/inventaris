<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\RuanganController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dasboard.index');
});

Route::resource('ruangan', RuanganController::class);
Route::resource('barang', BarangController::class);
Route::resource('inventaris', InventarisController::class);
Route::get('dasboard', function () {
    return view('dasboard.index');
});

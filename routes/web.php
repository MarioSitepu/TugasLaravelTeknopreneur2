<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengurusController;

Route::get('/', function () {
    return redirect('/pengurus'); // langsung ke list data pengurus
});

// CRUD Resource untuk pengurus
Route::resource('pengurus', PengurusController::class);

// Tiga subdomain/halaman tambahan (bisa diisi bebas sesuai tugas)
Route::view('/info', 'info');
Route::view('/deskripsi', 'deskripsi');
Route::view('/add', 'pengurus.create'); // langsung ke form tambah pengurus

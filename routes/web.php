<?php

use App\Http\Controllers\HolaqohController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\SantriController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

//route resource for products
Route::resource('holaqohs', HolaqohController::class);
Route::resource('santri', SantriController::class);
// Route::put('/barang/{id}', [BarangController::class, 'update'])->name('update-barang');
Route::resource('kamar', KamarController::class);

Route::post('kirim', [SantriController::class, 'post'])->name('post-siswa');
Route::get('/santri{santri}',[ SantriController::class. 'destroy'])->name('hapus-data');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/santri', SantriController::class); // Halaman daftar

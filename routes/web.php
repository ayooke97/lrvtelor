<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KandangController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PakanController;
use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\TelurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});
Route::get('landing', [LandingController::class, 'landing'])->name('landing');
Route::get('about', [LandingController::class, 'about'])->name('about');
Route::get('contact', [LandingController::class, 'contact'])->name('contact');

//LOGIN
Route::get('/login', [LandingController::class, 'login'])->name('login.login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/pekerja/pekerja', [PekerjaController::class, 'index'])->name('pekerja.pekerja');

Route::get('register', function () {
    return view('login.register');
})->name('register.form');

Route::post('register', [AuthController::class, 'register'])->name('register.store');

// Kandang
// Route untuk data ayam
Route::get('/ayam/index', [KandangController::class, 'index'])->name('ayam.index');
Route::get('/ayam/tambahayam', [KandangController::class, 'tambahayam'])->name('ayam.tambahayam');
Route::post('/ayam', [KandangController::class, 'storeayam'])->name('ayam.storeayam');
Route::get('/ayam/{id}/editayam', [KandangController::class, 'editayam'])->name('ayam.editayam');
Route::put('/ayam/{id}', [KandangController::class, 'updateayam'])->name('ayam.updateayam');
Route::delete('/ayam/{id}', [KandangController::class, 'delete'])->name('ayam.delete');


Route::get('/pekerja/kandang', [KandangController::class, 'kandang'])->name('pekerja.kandang');
Route::get('/kandang/datakandang', [KandangController::class, 'datakandang'])->name('kandang.datakandang');

// Menampilkan form untuk menambahkan data kandang
Route::get('/kandang/create', [KandangController::class, 'create'])->name('kandang.create');

// Menyimpan data kandang baru
Route::post('/kandang/store', [KandangController::class, 'store'])->name('kandang.store');

// Menampilkan form untuk mengedit data kandang
Route::get('/kandang/{id}/edit', [KandangController::class, 'edit'])->name('kandang.edit');

// Memperbarui data kandang
Route::put('/kandang/{id}', [KandangController::class, 'update'])->name('kandang.update');

// Menghapus data kandang
Route::delete('/kandang/{id}', [KandangController::class, 'destroy'])->name('kandang.destroy');

//PAKAN
// Menampilkan data pakan
Route::get('/pakan/pakan', [PakanController::class, 'pakan'])->name('pakan.pakan');

// Route untuk menambahkan data pakan
Route::get('/pakan/tambahpakan', [PakanController::class, 'create'])->name('pakan.tambahpakan');
Route::post('/pakan', [PakanController::class, 'store'])->name('pakan.store'); // Perbaikan rute

// Route untuk mengedit data pakan
Route::get('/pakan/{id}/editpakan', [PakanController::class, 'edit'])->name('pakan.editpakan');
Route::put('/pakan/{id}', [PakanController::class, 'update'])->name('pakan.update');

// Route untuk menghapus data pakan
Route::delete('/pakan/{id}', [PakanController::class, 'destroy'])->name('pakan.delete');

//TELUR
Route::get('/telur/produksi', [TelurController::class, 'telur'])->name('telur.produksi');
Route::get('/telur/createtelur', [TelurController::class, 'createtelur'])->name('telur.createtelur');
Route::post('/telur', [TelurController::class, 'storetelur'])->name('telur.storetelur');
Route::get('/telur/{id}/edittelur', [TelurController::class, 'edittelur'])->name('telur.edittelur');
Route::put('/telur/{id}', [TelurController::class, 'updatetelur'])->name('telur.updatetelur');
Route::delete('/telur/{id}', [TelurController::class, 'destroytelur'])->name('telur.destroytelur');

//LAPORAN
Route::get('/laporan/laporan', [LaporanController::class, 'laporan'])->name('laporan.laporan');
Route::get('/laporan/pdf', [LaporanController::class, 'generatePDF'])->name('laporan.pdf');

//PEKERJA
Route::get('/datapekerja', [PekerjaController::class, 'showDataPekerja'])->name('pekerja.datapekerja');
Route::get('/datapekerja/{id}/editpekerja', [PekerjaController::class, 'edit'])->name('pekerja.editpekerja');
Route::put('/datapekerja/{id}', [PekerjaController::class, 'update'])->name('pekerja.update');
Route::delete('/datapekerja/{id}', [PekerjaController::class, 'destroy'])->name('pekerja.destroy');


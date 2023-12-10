<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\KategoriBarangController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ViewIndexPage
//Landing
Route::get('/', [ViewController::class, 'landingPage'])->name('landingPage');
Route::get('/login', [ViewController::class, 'loginPage'])->name('loginPage');
Route::get('/register', [ViewController::class, 'registerPage'])->name('registerPage');
Route::get('/dashboard', [ViewController::class, 'dashboardPage'])->name('dashboardPage');

//Ruangan
Route::get('/ruangan', [ViewController::class, 'ruanganPage'])->name('ruanganPage');
Route::get('/ruangan-create', [ViewController::class, 'ruanganCreatePage'])->name('ruanganCreatePage');
Route::get('/ruangan-update/{id}', [ViewController::class, 'ruanganUpdatePage'])->name('ruanganUpdatePage');

//Barang
Route::get('/barang', [ViewController::class, 'barangPage'])->name('barangPage');
Route::get('/barang-create', [ViewController::class, 'barangCreatePage'])->name('barangCreatePage');
Route::get('/barang-update/{id}', [ViewController::class, 'barangUpdatePage'])->name('barangUpdatePage');

//KategoriBarang
Route::get('/kategori-barang', [ViewController::class, 'kategoriBarangPage'])->name('kategoriBarangPage');
Route::get('/kategori-barang-create', [ViewController::class, 'kategoriBarangCreatePage'])->name('kategoriBarangCreatePage');
Route::get('/kategori-barang-update/{id}', [ViewController::class, 'kategoriBarangUpdatePage'])->name('kategoriBarangUpdatePage');

//Peminjaman
Route::get('/peminjaman', [ViewController::class, 'peminjamanPage'])->name('peminjamanPage');
Route::get('/peminjaman-create', [ViewController::class, 'peminjamanCreatePage'])->name('peminjamanCreatePage');
Route::get('/peminjaman-update/{id}', [ViewController::class, 'peminjamanUpdatePage'])->name('peminjamanUpdatePage');

//Pengembalian
Route::get('/pengembalian', [ViewController::class, 'pengembalianPage'])->name('pengembalianPage');
Route::get('/pengembalian-create', [ViewController::class, 'pengembalianCreatePage'])->name('pengembalianCreatePage');
Route::get('/pengembalian-update/{id}', [ViewController::class, 'pengembalianUpdatePage'])->name('pengembalianUpdatePage');

//History
Route::get('/history', [ViewController::class, 'historyPage'])->name('historyPage');

//User
Route::get('/user', [ViewController::class, 'userPage'])->name('userPage');
Route::get('/user-create', [ViewController::class, 'userCreatePage'])->name('userCreatePage');
Route::get('/user-update/{id}', [ViewController::class, 'userUpdatePage'])->name('userUpdatePage');

//AuthUser
Route::post('/auth-user', [UserController::class, 'auth'])->name('auth');
Route::get('/auth-logout', [UserController::class, 'logout'])->name('logout');

// CRUD

// RUANGAN
Route::post('/ruangan-store',[RuanganController::class,'store'])->name('ruanganStore');
Route::post('/ruangan-update/{id}',[RuanganController::class,'update'])->name('ruanganUpdate');
Route::get('/ruangan-delete/{id}',[RuanganController::class,'destroy'])->name('ruanganDelete');

// KATEGORI-BARANG
Route::post('/kategori-store',[KategoriBarangController::class,'store'])->name('kategoriStore');
Route::post('/kategori-update/{id}',[KategoriBarangController::class,'update'])->name('kategoriUpdate');
Route::get('/kategori-delete/{id}',[KategoriBarangController::class,'destroy'])->name('kategoriDelete');

//BARANG
Route::post('/barang-store',[BarangController::class,'store'])->name('barangStore');
Route::post('/barang-update/{id}',[BarangController::class,'update'])->name('barangUpdate');
Route::get('/barang-delete/{id}',[BarangController::class,'destroy'])->name('barangDelete');

//USER
Route::post('/user-store',[UserController::class,'store'])->name('userStore');
Route::post('/user-update/{id}',[UserController::class,'update'])->name('userUpdate');
Route::get('/user-delete/{id}',[UserController::class,'destroy'])->name('userDelete');

//PEMINJAMAN
Route::post('/peminjaman-store',[PeminjamanController::class,'store'])->name('peminjamanStore');
Route::post('/peminjaman-update/{id}',[PeminjamanController::class,'update'])->name('peminjamanUpdate');
Route::get('/peminjaman-delete/{id}',[PeminjamanController::class,'destroy'])->name('peminjamanDelete');


//PENGEMBALIAN
Route::post('/pengembalian-store',[PengembalianController::class,'store'])->name('pengembalianStore');
Route::post('/pengembalian-update/{id}',[PengembalianController::class,'update'])->name('pengembalianUpdate');

// HISTORY
Route::get('/history-delete/{id}',[HistoryController::class,'destroy'])->name('historyDelete');





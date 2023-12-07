<?php

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

// ViewPage
Route::get('/', [ViewController::class, 'landingPage'])->name('landingPage');
Route::get('/login', [ViewController::class, 'loginPage'])->name('loginPage');
Route::get('/register', [ViewController::class, 'registerPage'])->name('registerPage');
Route::get('/dashboard', [ViewController::class, 'dashboardPage'])->name('dashboardPage');
Route::get('/ruangan', [ViewController::class, 'ruanganPage'])->name('ruanganPage');
Route::get('/barang', [ViewController::class, 'barangPage'])->name('barangPage');
Route::get('/kategori-barang', [ViewController::class, 'kategoriBarangPage'])->name('kategoriBarangPage');
Route::get('/peminjaman', [ViewController::class, 'peminjamanPage'])->name('peminjamanPage');
Route::get('/pengembalian', [ViewController::class, 'pengembalianPage'])->name('pengembalianPage');
Route::get('/history', [ViewController::class, 'historyPage'])->name('historyPage');
Route::get('/user', [ViewController::class, 'userPage'])->name('userPage');

//AuthUser
Route::post('/auth-user', [UserController::class, 'auth'])->name('auth');
Route::get('/auth-logout', [UserController::class, 'logout'])->name('logout');



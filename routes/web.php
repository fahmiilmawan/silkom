<?php

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



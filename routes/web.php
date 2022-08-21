<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\TambahController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\TambahGaleryController;
use App\Http\Controllers\UpdateGaleriesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LoginController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
Route::get('/menu', [MenuController::class, 'index'])->middleware('auth');
Route::get('/contact', [ContactController::class, 'index'])->middleware('auth');
Route::get('/galery', [GaleryController::class, 'index'])->middleware('auth');
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/registrasi', [RegistrasiController::class, 'index'])->middleware('guest');
Route::post('/registrasi', [RegistrasiController::class, 'store']);
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
Route::get('/tambah', [TambahController::class, 'index'])->middleware('auth');
// Route::resource('/tambah', [Restauran::class]);
Route::get('/update', [UpdateController::class, 'index'])->middleware('auth');
Route::get('/updategaleries', [UpdateGaleriesController::class, 'index'])->middleware('auth');
Route::get('/tambahgaleries', [TambahGaleryController::class, 'index'])->middleware('auth');

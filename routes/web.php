<?php

use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\SiswaController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/admin', function () {
//     return view('back. admin.index');
// });

// Route::resource('/laporan', LaporanController::class);

// Rute untuk JurusanController
Route::resource('jurusan', JurusanController::class);


// Rute untuk LaporanController
Route::resource('laporan', LaporanController::class);


// Rute untuk SiswaController
Route::resource('siswa', SiswaController::class);

//Route untuk halaman home-page
Route::get('/homepage', function () {
    return view('homepage.index');
});
//Route untuk halaman home-page
Route::get('/login', function () {
    return view('login.index');
});
Route::get('/register', function () {
    return view('login.register');
});
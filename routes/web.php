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

// Rute untuk halaman Jurusan TKJ
Route::get('/laporan_BDP', function () {
    return view('homepage.laporan_BDP');
});

// Rute untuk halaman Jurusan BDP
Route::get('/laporan_OTKP', function () {
    return view('homepage.laporan_OTKP');
});

// Rute untuk halaman Jurusan OTKP
Route::get('/laporan_TSM', function () {
    return view('homepage.laporan_TSM');
});

// Rute untuk halaman Jurusan TSM
Route::get('/laporan_TKJ', function () {
    return view('homepage.laporan_TKJ');
});

//Route untuk halaman home-page
Route::get('/login', function () {
    return view('login.index');
});
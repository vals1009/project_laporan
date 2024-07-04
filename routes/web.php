<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LaporanBDPController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LaporanOTKPController;
use App\Http\Controllers\LaporanTBSMController;
use App\Http\Controllers\LaporanTKJController;
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

// Rute untuk SiswaController
Route::resource('siswa', SiswaController::class);

// ROUTE DATA LAPORAN SISWA UNTUK DI BACK-END
Route::resource('laporanTKJ', LaporanTKJController::class);
Route::resource('laporanOTKP', LaporanOTKPController::class);
Route::resource('laporanTBSM', LaporanTBSMController::class);
Route::resource('laporanBDP', LaporanBDPController::class);
// ROUTE DATA LAPORAN SISWA UNTUK DI BACK-END


// ROUTE DATA LAPORAN SISWA UNTUK DI FRONT-END/HOMEPAGE
Route::get('/laporan-tkj', [HomePageController::class, 'viewsTKJ'])->name('laporan.tkj');
Route::get('/laporan-otkp', [HomePageController::class, 'viewsOTKP'])->name('laporan.otkp');
Route::get('/laporan-tbsm', [HomePageController::class, 'viewsTBSM'])->name('laporan.tbsm');
Route::get('/laporan-bdp', [HomePageController::class, 'viewsBDP'])->name('laporan.bdp');



//Route untuk halaman home-page
Route::get('/login', function () {
    return view('login.index');
});
Route::get('/register', function () {
    return view('login.register');
});
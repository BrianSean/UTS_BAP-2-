<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\matakuliahController;
use App\Http\Controllers\programSTudiController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\jadwalKuliahController;

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
    return view('index');
});

Route::get('/Selamatdatang', function () {
    return view('welcome');
});

Route::get('/Profil', function () {
    return view('profile');
});

// Route::get('/Mahasiswa', function () {
//     return view('mahasiswa');
// });
Route::get('/Mahasiswa', [mahasiswaController::class, 'index']);

Route::get('/Matakuliah', [matakuliahController::class, 'index']);

Route::get('/ProgramStudi', [programstudiController::class, 'index']);

Route::get('/Pembayaran', [pembayaranController::class, 'index']);

Route::get('/JadwalKuliah', [jadwalKuliahController::class, 'index']);
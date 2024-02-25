<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\LoginController;

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
// Route::get('/', function () {
//     return view('login');
// });
// routes/web.php

use App\Http\Controllers\LoginController;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'login'])->name('login.submit');

use App\Http\Controllers\RuanganController;

Route::get('/home', [RuanganController::class, 'index']);
Route::get('/admin/home', [RuanganController::class, 'index2']);

// Route::get('/home', function () {
//     return view('karyawan.home');
// });


use App\Http\Controllers\LihatDetailController;

Route::get('/lihatDetail', [LihatDetailController::class, 'show'])->name('lihatDetail');

// File: routes/web.php

// use App\Http\Controllers\PeminjamanController;

// Route::post('/isiData', [PeminjamanController::class, 'simpanPeminjam'])->name('isiData');

// Route::get('/lihatDetail', function () {
//     return view('karyawan.lihatdetail');
// });
// home/lihatDetail

// Route::get('/daftarRuangan', function () {
//     return view('karyawan.daftaruangan');
// });
// /home/lainnya/daftarRuangan

use App\Http\Controllers\DaftarRuanganController;

Route::get('/daftarRuangan', [DaftarRuanganController::class, 'index'])->name('daftarRuangan');


Route::get('/editProfile', function () {
    return view('karyawan.editprofil');
});

Route::get('/detailNamaRuang', function () {
    return view('karyawan.detaildaftarR');
});



// home/ruangTerpakai/detailRuangan

Route::get('/isiData', function () {
    return view('karyawan.isidata');
});

// Route::get('/detail', function () {
//     return view('detailhome');
// });

use App\Http\Controllers\PeminjamanController;
// Route::post('/isiData', [PeminjamanController::class, 'isiData'])->name('isiData');
// Route::post('/isiData', [PeminjamanController::class, 'isiData'])->name('isiData');

// Route::get('/detailRuangan', [PeminjamanController::class, 'detailRuangan'])->name('detailRuangan');

Route::get('/ruang-terpakai', [PeminjamanController::class, 'ruangTerpakai'])->name('ruang-terpakai');
Route::get('/ruang-t-terpakai', [PeminjamanController::class, 'ruangTidakTerpakai'])->name('ruang-t-terpakai');
Route::get('/ruang-dlm-perbaikan', [PeminjamanController::class, 'ruangPerbaikan'])->name('ruang-dlm-perbaikan');
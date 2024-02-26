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

// use App\Http\Controllers\LoginController;
// use App\Http\Middleware\RestrictLoginAccess;

// Route::get('/', [LoginController::class, 'index'])->name('login');
// Route::post('/', [LoginController::class, 'login'])->name('login.submit');

// use App\Http\Controllers\RuanganController;

// // Route::get('/home', [RuanganController::class, 'index']);
// Route::get('/admin/home', [RuanganController::class, 'index2']);
// Route::get('/home', [RuanganController::class, 'index'])->name('home')->middleware(RestrictLoginAccess::class);

use App\Http\Controllers\RuanganController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\RestrictLoginAccess;

// Other routes...

// Apply the RestrictLoginAccess middleware to all routes except the login route
Route::middleware([RestrictLoginAccess::class])->group(function () {
    // Home Route
    Route::get('/home', [RuanganController::class, 'index'])->name('home');

    // Admin Home Route
    Route::get('/admin/home', [RuanganController::class, 'index2'])->name('admin.home');
});


// Login Route
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'login'])->name('login.submit');

// Other routes...
// Route::get('/home', function () {
//     return view('karyawan.home');
// });


use App\Http\Controllers\LihatDetailController;

Route::get('/lihatDetail', [LihatDetailController::class, 'show'])->name('lihatDetail');
Route::get('/lihatDetail', [LihatDetailController::class, 'show2'])->name('lihatDetail');

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
Route::get('/jmlRuangan', [DaftarRuanganController::class, 'index2'])->name('daftarRuangan');

Route::get('/editProfile', function () {
    return view('karyawan.editprofil');
});

Route::get('/detailNamaRuang', function () {
    return view('karyawan.detaildaftarR');
});

Route::get('/peminjam', function () {
    return view('admin.peminjam');
});

// home/ruangTerpakai/detailRuangan

Route::get('/isiData', function () {
    return view('karyawan.isidata');
});

Route::get('/tambahRuangan', function () {
    return view('admin.tambahruangan');
});


// Route::get('/detail', function () {
//     return view('detailhome');
// });

use App\Http\Controllers\PeminjamanController;
// Route::post('/isiData', [PeminjamanController::class, 'isiData'])->name('isiData');
// Route::post('/isiData', [PeminjamanController::class, 'isiData'])->name('isiData');

// Route::get('/detailRuangan', [PeminjamanController::class, 'detailRuangan'])->name('detailRuangan');

Route::get('/ruang-terpakai', [PeminjamanController::class, 'ruangTerpakai'])->name('ruang-terpakai');
Route::get('/ruangTerpakai', [PeminjamanController::class, 'ruangTerpakai2'])->name('ruangTerpakai');
Route::get('/peminjam', [PeminjamanController::class, 'ruangTerpakai3'])->name('ruangTerpakai');

Route::get('/ruang-t-terpakai', [PeminjamanController::class, 'ruangTidakTerpakai'])->name('ruang-t-terpakai');
Route::get('/ruangTidakTerpakai', [PeminjamanController::class, 'ruangTidakTerpakai2'])->name('ruangTidakTerpakai');

Route::get('/ruang-dlm-perbaikan', [PeminjamanController::class, 'ruangPerbaikan'])->name('ruang-dlm-perbaikan');
Route::get('/ruangDlmPerbaikan', [PeminjamanController::class, 'ruangPerbaikan2'])->name('ruang-dlm-perbaikan');
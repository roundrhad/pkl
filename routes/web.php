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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('/home', function () {
    return view('home');
});

Route::get('/detailRuangan', function () {
    return view('detailruangan');
});
// home/ruangTerpakai/detailRuangan

Route::get('/isiData', function () {
    return view('formdata');
});

Route::get('/lihatDetail', function () {
    return view('lihatdetail');
});
// home/lihatDetail

Route::get('/daftarRuangan', function () {
    return view('daftaruangan');
});
// /home/lainnya/daftarRuangan

Route::get('/editProfile', function () {
    return view('editprofil');
});

Route::get('/detailNamaRuang', function () {
    return view('detaildaftarR');
});

// Route::get('/detail', function () {
//     return view('detailhome');
// });

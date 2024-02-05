<?php

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
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/detailRuangan', function () {
    return view('detailruangan');
});

Route::get('/isiData', function () {
    return view('formdata');
});

Route::get('/lihatDetail', function () {
    return view('lihatdetail');
});

Route::get('/daftarRuangan', function () {
    return view('daftaruangan');
});

Route::get('/editProfile', function () {
    return view('editprofil');
});

Route::get('/detailNamaRuang', function () {
    return view('detaildaftarR');
});

// Route::get('/detail', function () {
//     return view('detailhome');
// });

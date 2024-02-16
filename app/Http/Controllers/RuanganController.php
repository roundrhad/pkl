<?php

namespace App\Http\Controllers;

use App\Models\Tempat;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index()
    {
        $tempat = Tempat::all(); // Mengambil semua data ruangan
        $ruangTidakTerpakai = Tempat::where('status', 'Tidak Terpakai')->count();
        $ruangTerpakai = Tempat::where('status', 'Terpakai')->count();
        $ruangPerbaikan = Tempat::where('status', 'Perbaikan')->count();

        return view('karyawan.home', [
            'ruangTerpakai' => $ruangTerpakai,
            'ruangTidakTerpakai' => $ruangTidakTerpakai,
            'ruangPerbaikan' => $ruangPerbaikan,
            'tempat' => $tempat, // Mengirimkan data ruangan ke view
        ]);
    }
}

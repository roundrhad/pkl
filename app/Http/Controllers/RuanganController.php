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

    public function index2()
    {
        $tempat = Tempat::all(); // Mengambil semua data ruangan
        $id = Tempat::count(); // Menghitung jumlah ruangan berdasarkan id
        $ruangTerpakai = Tempat::where('status', 'Terpakai')->count(); // Menghitung jumlah ruangan yang terpakai
        $ruangTidakTerpakai = Tempat::where('status', 'Tidak Terpakai')->count();
        $ruangPerbaikan = Tempat::where('status', 'Perbaikan')->count(); // Menghitung jumlah ruangan yang dalam perbaikan
    
        return view('admin.home', [
            'ruangTerpakai' => $ruangTerpakai,
            'ruangTidakTerpakai' => $ruangTidakTerpakai,
            'id' => $id,
            'ruangPerbaikan' => $ruangPerbaikan,
            'tempat' => $tempat, // Mengirimkan data ruangan ke view
        ]);
    }

    public function index3()
    {
        $tempat = Tempat::all();
        return view('admin.home', compact('tempat'));
    }
    
    

}

<?php

namespace App\Http\Controllers;

use App\Models\Tempat;
use Illuminate\Http\Request;

class DaftarRuanganController extends Controller
{
    public function index()
    {
        $ruangans = Tempat::all(); // Ambil semua data ruangan
        return view('karyawan.daftaruangan', compact('ruangans'));
    }

    public function index2()
    {
        $ruangans = Tempat::all(); // Ambil semua data ruangan
        return view('admin.jmlruangan', compact('ruangans'));
    }
}

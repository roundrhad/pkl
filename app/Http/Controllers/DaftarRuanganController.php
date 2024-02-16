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
}

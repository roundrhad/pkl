<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman; // Pastikan Anda mengganti Model ini dengan model yang sesuai

class PeminjamanController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'namaruang' => 'required|string|max:255',
            'namalengkap' => 'required|string|max:255',
            'divisi' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
            'keperluan' => 'required|string|max:255',
            'tanggalpeminjaman' => 'required|date',
            'mulaijampeminjaman' => 'required|date_format:H:i',
            'selesaijampeminjaman' => 'required|date_format:H:i|after:mulai_jam_peminjaman',
        ]);

        // Simpan data ke database menggunakan model
        Peminjaman::create($validatedData);

        // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
        return redirect()->route('formdata')->with('success', 'Data peminjaman berhasil disimpan.');
    }
}

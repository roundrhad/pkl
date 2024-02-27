<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use Carbon\Carbon;

class FormController extends Controller
{
    public function store(Request $request)
    {
    // Simpan data ke dalam database
    $peminjam = new Peminjaman();
    $peminjam->namaruang = $request->input('namaruang');
    $peminjam->namalengkap = $request->input('namalengkap');
    $peminjam->divisi = $request->input('divisi');
    $peminjam->nip = $request->input('nip');
    $peminjam->keperluan = $request->input('keperluan');
    
    // Ubah format tanggal menjadi yyyy-mm-dd
    $tanggalPeminjaman = date('Y-m-d', strtotime($request->input('tanggal_peminjaman')));
    $peminjam->tanggalpeminjaman = $tanggalPeminjaman;

    $peminjam->mulaijampeminjaman = $request->input('mulaijampeminjaman');
    $peminjam->selesaijampeminjaman = $request->input('selesaijampeminjaman');
    
    $peminjam->status = 'Terpakai';

    $peminjam->save();

    return view('karyawan.isidata');
    }
}

// Validasi data
        // $validatedData = $request->validate([
        //     'namaruang' => ['required', 'varchar', 'max:255'],
        //     'namalengkap' => ['required', 'varchar', 'max:255'],
        //     'divisi' => ['required', 'varchar', 'max:255'],
        //     'nip' => ['required', 'varchar', 'max:100'],
        //     'keperluan' => ['required', 'varchar', 'max:255'],
        //     'tanggalpeminjaman' => ['required', 'date'],
        //     'mulaijampeminjaman' => ['required', 'date_format:H:i:s'],
        //     'selesaijampeminjaman' => ['required', 'date_format:H:i:s'],
        // ]);      


// $tanggalPeminjaman = Carbon::createFromFormat('d/m/Y', $request->input('tanggalpeminjaman'))->format('Y-m-d');
 // $request->session()->put('namaruang', $request->namaruang);

        // Berikan respon sukses kepada pengguna
        // return view()->back()->with('success', 'Data peminjam berhasil disimpan!');
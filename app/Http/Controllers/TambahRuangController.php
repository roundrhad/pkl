<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use Carbon\Carbon;

class FormController extends Controller
{
    public function tambahRuang(Request $request)
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

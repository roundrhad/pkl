<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Tempat;

class TambahRuangController extends Controller
{
    public function tambahRuang(Request $request)
    {
        // Periksa apakah file telah diunggah
        if ($request->hasFile('file_input')) {
            // Simpan file yang diunggah
            $file = $request->file('file_input');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath['file_input'] = $file->storeAs('storage/picture', $fileName); // Sesuaikan dengan direktori penyimpanan Anda
        } else {
            // Jika tidak ada file yang diunggah, atur $filePath menjadi null atau sesuaikan dengan logika aplikasi Anda
            $filePath = null;
        }

        // Membuat objek $tempat
        $tempat = new Tempat();

        // Mengatur nilai atribut dari objek $tempat
        $tempat->nama = $request->input('namaruang');
        $tempat->kapasitas = $request->input('kapasitas');
        $tempat->gedung = $request->input('gedung');
        $tempat->lantai = $request->input('lantai');
        $tempat->alamat = $request->input('alamat');
        $tempat->deskripsi = $request->input('deskripsi');
        $tempat->imgurl = $filePath; // Simpan path file ke dalam kolom imgurl atau sesuaikan dengan kebutuhan Anda

        // Memeriksa apakah ada entri di tabel Peminjam dengan nama ruangan yang sama
        $peminjam = Peminjaman::where('namaruang', $tempat->nama)->first();

        // Jika ada entri yang ditemukan di tabel Peminjam, dan statusnya 'Terpakai'
        if ($peminjam && $peminjam->status == 'Terpakai') {
            $tempat->status = 'Terpakai';
        } else {
            $tempat->status = 'Tidak Terpakai';
        }

        dd($filePath);
        
        // Menyimpan data ke dalam database
        $tempat->save();

        // Kembali ke halaman tambah ruangan
        return view('admin.tambahruangan')->with('success', 'Ruangan berhasil ditambahkan.');
        
    }
}

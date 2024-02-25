<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    // Metode untuk menampilkan detail ruangan dengan data peminjaman yang terpakai
    public function detailRuangan(){
    // Ambil data peminjaman dengan status 'Terpakai'
    $peminjamanTerpakai = Peminjaman::where('status', 'Terpakai')->get();
    
    // Kirim data ke view 'detailruangan'
    return view('karyawan.detailruangan', ['peminjam' => $peminjamanTerpakai]);
    }

    public function isiData(Request $request){
    // Validasi data yang dikirim dari formulir
    $validatedData = $request->validate([
        'namaruang' => 'required|string',
        'namalengkap' => 'required|string',
        'divisi' => 'required|string',
        'nip' => 'required|string',
        'keperluan_peminjaman' => 'required|string',
        'tanggal_peminjaman' => 'required|date',
        'mulai_jam_peminjaman' => 'required',
        'selesai_jam_peminjaman' => 'required',
    ]);

    // Simpan data ke dalam tabel peminjam
    Peminjaman::create($validatedData);

    // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
    return redirect()->route('karyawan.formdata');
    }


    // Metode untuk menampilkan halaman utama (jika dibutuhkan)
    // public function index()
    // {
        // Anda dapat menambahkan logika untuk halaman utama di sini
    // }


    // public function index()
    // {
    //     $tempat = Tempat::all(); // Mengambil semua data ruangan
    //     $ruangTidakTerpakai = Tempat::where('status', 'Tidak Terpakai')->count();
    //     $ruangTerpakai = Tempat::where('status', 'Terpakai')->count();
    //     $ruangPerbaikan = Tempat::where('status', 'Perbaikan')->count();

    //     return view('karyawan.home', [
    //         'ruangTerpakai' => $ruangTerpakai,
    //         'ruangTidakTerpakai' => $ruangTidakTerpakai,
    //         'ruangPerbaikan' => $ruangPerbaikan,
    //         'tempat' => $tempat, // Mengirimkan data ruangan ke view
    //     ]);
    // }

    // Metode untuk menyimpan data peminjam baru
    // public function simpanPeminjam(Request $request)
    // {
    //     // Validasi data yang diterima dari form
    //     $validatedData = $request->validate([
    //         // Definisikan aturan validasi sesuai kebutuhan Anda
    //     ]);

    //     // Simpan data ke database menggunakan model
    //     // $peminjam = Peminjaman:all();
    //     Peminjaman::create($validatedData);
    // }
}

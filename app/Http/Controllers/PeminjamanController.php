<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Tempat;


class PeminjamanController extends Controller
{
    // Metode untuk menampilkan detail ruangan dengan data peminjaman yang terpakai
    public function ruangTerpakai(){
        $peminjamanTerpakai = Peminjaman::where('status', 'Terpakai')->get();
        return view('karyawan.rterpakai', compact('peminjamanTerpakai'));
    }

    public function ruangTerpakai2(){
        $peminjamanTerpakai2 = Peminjaman::where('status', 'Terpakai')->get();
        return view('admin.rterpakai', compact('peminjamanTerpakai2'));
    }

    public function ruangTerpakai3(){
        $peminjamanTerpakai3 = Peminjaman::where('status', 'Terpakai')->get();
        return view('admin.peminjam', compact('peminjamanTerpakai3'));
    }

    public function ruangTidakTerpakai(){
        $ruangTidakTerpakai = Tempat::where('status', 'Tidak Terpakai')->get();
        return view('karyawan.rtdkterpakai', compact('ruangTidakTerpakai'));
    }

    public function ruangTidakTerpakai2(){
        $ruangTidakTerpakai2 = Tempat::where('status', 'Tidak Terpakai')->get();
        return view('admin.rtdkterpakai', compact('ruangTidakTerpakai2'));
    }

    public function ruangPerbaikan(){
        $ruangPerbaikan = Tempat::where('status', 'Perbaikan')->get();
        return view('karyawan.rdlmperbaikan', compact('ruangPerbaikan'));
    }

    public function ruangPerbaikan2(){
        $ruangPerbaikan2 = Tempat::where('status', 'Perbaikan')->get();
        return view('admin.rdlmperbaikan', compact('ruangPerbaikan2'));
    }

    
    
    // public function isiData(Request $request){
    // // Validasi data yang dikirim dari formulir
    // $validatedData = $request->validate([
    //     'namaruang' => 'required|string',
    //     'namalengkap' => 'required|string',
    //     'divisi' => 'required|string',
    //     'nip' => 'required|string',
    //     'keperluan_peminjaman' => 'required|string',
    //     'tanggal_peminjaman' => 'required|date',
    //     'mulai_jam_peminjaman' => 'required',
    //     'selesai_jam_peminjaman' => 'required',
    // ]);

    // // Simpan data ke dalam tabel peminjam
    // Peminjaman::create($validatedData);

    // // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
    //     return redirect()->route('karyawan.formdata')->with('success', 'Data has been saved successfully.');
    // }

    
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

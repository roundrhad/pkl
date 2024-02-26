<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; // Tambahkan impor ini
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Tambahkan impor ini jika belum ada

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
{
    // Validasi data input
    $credentials = $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    // Authentikasi pengguna
    if (Auth::attempt($credentials)) {
        // Jika autentikasi berhasil, redirect ke halaman berikutnya
        $user = Auth::user();

        switch ($user->iduser) {
            case 1:
                // Jika 'iduser' == 1, redirect ke /home
                return redirect()->route('home');
                break;
            case 2:
                // Jika 'iduser' == 2, redirect ke /admin/home
                return redirect()->route('admin.home');
                break;
            default:
                // Jika 'iduser' tidak sesuai dengan kondisi di atas, redirect ke halaman default
                // Adjust this as needed, for example, redirect to a general dashboard.
                return redirect()->route('default.home');
        }
    } else {
        // Jika autentikasi gagal, tampilkan pesan kesalahan
        return back()->withInput()->withErrors([
            'username' => 'Invalid username or password.',
        ]);
    }
}

}

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

        // Ambil user berdasarkan username
        $user = User::where('username', $request->username)->first();

        if ($user) {
            // Periksa apakah password yang dimasukkan sesuai
            if (password_verify($request->password, $user->password)) {
                // Jika autentikasi berhasil, login pengguna
                Auth::login($user);

                // Redirect pengguna sesuai dengan perannya
                switch ($user->iduser) {
                    case 1:
                        return redirect()->route('home');
                        break;
                    case 2:
                        return redirect()->route('admin.home');
                        break;
                    default:
                        return redirect()->route('default.home');
                }
            }
        }

        // Jika autentikasi gagal, tampilkan pesan kesalahan
        return back()->withInput()->withErrors([
            'username' => 'Invalid username or password.',
        ]);
    }

}

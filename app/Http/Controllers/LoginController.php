<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return redirect()->intended('/home');
        } else {
            // Jika autentikasi gagal, tampilkan pesan kesalahan
            return back()->withInput()->withErrors([
                'username' => 'Invalid username or password.',
            ]);
        }
    }
}

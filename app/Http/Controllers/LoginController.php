<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
            if (Hash::check($request->password, $user->password)) {
                // Jika autentikasi berhasil, login pengguna
                Auth::login($user);

                // Redirect pengguna sesuai dengan role_id
                switch ($user->role_id) {
                    case 1:
                        return redirect()->route('home');
                    case 2:
                        return redirect()->route('admin.home');
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

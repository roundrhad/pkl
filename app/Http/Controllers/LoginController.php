<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (auth()->attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/home');
        }

        return back()->withInput()->withErrors(['login_failed' => 'Invalid username or password.']);
    }
}

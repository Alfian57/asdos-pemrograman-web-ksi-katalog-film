<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'max:255'],
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        } else {
            return redirect('/login')->with('pesan-gagal', 'Akun tidak ditemukan');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}

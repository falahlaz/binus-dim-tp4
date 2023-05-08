<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // index
    public function index()
    {
        if (Session::has('username')) {
            return redirect()->route('template')->with('error', 'Anda sudah login');
        }
        return view('index');
    }

    // login
    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        if ($username == "" || $password == "") {
            return redirect('index')->with('error', 'Masukkan username dan password anda');
        }

        $user = User::where('username', $username)->where('password', $password)->first();
        if (!$user) {
            return redirect('index')->with('error', 'Username atau password salah');
        }

        Session::put('username', $user->username);

        return redirect()->route('template')->with('success', 'Login berhasil');
    }

    // logout
    public function logout() {
        Session::flush();
        return redirect()->route('index')->with('success', 'Logout berhasil');
    }
}

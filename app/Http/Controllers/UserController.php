<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    // index
    public function index()
    {
        if (!Session::has('username')) {
            return redirect()->route('index')->with('error', 'Anda harus login terlebih dahulu');
        }

        $session_id = Session::get('username');
        $users = DB::table('tbpengguna')->select('user_id', 'username', 'hak_akses')->get();
        
        return view('lihatpengguna', compact('session_id', 'users'));
    }

    // create
    public function create()
    {
        if (!Session::has('username')) {
            return redirect()->route('index')->with('error', 'Anda harus login terlebih dahulu');
        }

        $session_id = Session::get('username');
        
        return view('tambahpengguna', compact('session_id'));
    }

    // store
    public function store(Request $request)
    {
        if (!Session::has('username')) {
            return redirect()->route('index')->with('error', 'Anda harus login terlebih dahulu');
        }

        DB::table('tbpengguna')->insert([
            'username' => $request->username,
            'password' => $request->password,
            'hak_akses' => $request->hak_akses
        ]);
        
        return redirect()->route('user.index')->with('success', 'Data berhasil ditambahkan');
    }
}

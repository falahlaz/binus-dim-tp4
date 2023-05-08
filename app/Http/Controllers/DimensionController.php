<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DimensionController extends Controller
{
    // index 
    public function index()
    {
        if (!Session::has('username')) {
            return redirect()->route('index')->with('error', 'Anda harus login terlebih dahulu');
        }

        $session_id = Session::get('username');
        $dimensions = DB::table('tbdimensi')->get();

        return view('lihatdimensi', compact('session_id', 'dimensions'));
    }

    // create
    public function create()
    {
        if (!Session::has('username')) {
            return redirect()->route('index')->with('error', 'Anda harus login terlebih dahulu');
        }

        $session_id = Session::get('username');
        return view('tambahdimensi', compact('session_id'));
    }

    // store
    public function store(Request $request)
    {
        DB::table('tbdimensi')->insert([
            "dimensi" => $request->dimensi,
            "bobot" => $request->bobot
        ]);
        return redirect()->route('dimension.index')->with('success', 'Data dimensi berhasil ditambahkan');
    }
}

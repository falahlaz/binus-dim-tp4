<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    // index
    public function index()
    {
        if (!Session::has('username')) {
            return redirect()->route('index')->with('error', 'Anda harus login terlebih dahulu');
        }

        $session_id = Session::get('username');
        $questions = DB::table('tbkuesioner')->get();

        return view('lihatpertanyaan', compact('session_id', 'questions'));
    }

    // create
    public function create()
    {
        if (!Session::has('username')) {
            return redirect()->route('index')->with('error', 'Anda harus login terlebih dahulu');
        }

        $session_id = Session::get('username');
        $dimensions = DB::table('tbdimensi')->get();

        return view('tambahpertanyaan', compact('session_id', 'dimensions'));
    }

    // store
    public function store(Request $request)
    {
        if (!Session::has('username')) {
            return redirect()->route('index')->with('error', 'Anda harus login terlebih dahulu');
        }

        DB::table('tbkuesioner')->insert([
            'pertanyaan' => $request->pertanyaan,
            'id_dimensi' => $request->id_dimensi,
            'variabel' => $request->variabel,
            'pila' => $request->pila,
            'pilb' => $request->pilb,
            'pilc' => $request->pilc,
            'pild' => $request->pild,
            'pile' => $request->pile
        ]);

        return redirect()->route('question.index');
    }

    // questionnaire
    public function questionnaire()
    {
        if (!Session::has('username')) {
            return redirect()->route('index')->with('error', 'Anda harus login terlebih dahulu');
        }

        $session_id = Session::get('username');
        $questions = DB::table('tbkuesioner')->orderBy('id_kuesioner')->get();

        return view('kuesioner', compact('session_id', 'questions'));
    }

    // questionnaireStore
    public function questionnaireStore(Request $request)
    {
        if (!Session::has('username')) {
            return redirect()->route('index')->with('error', 'Anda harus login terlebih dahulu');
        }

        $session_id = Session::get('username');
        $pilihan = $request->pilihan;
		$id_kuesioner = $request->id;
		$jumlah = $request->jumlah;

        $jum = count($pilihan);
		if ($jum < $jumlah) {
            return redirect()->route('question.questionnaire')->with('error', 'Maaf anda belum mengisi secara lengkap, mohon diisi secara lengkap');
        }

        DB::table('jawaban')->where('username', $session_id)->delete();

        for ($i = 0; $i < $jum; $i++) {
            //id nomor soal
            $nomor = $id_kuesioner[$i];

            //jika user tidak memilih jawaban
            if (empty($pilihan[$nomor])) {
                $jawaban = '';
            } else {
                //jawaban dari user
                $jawaban = $pilihan[$nomor];
            }

            DB::table('jawaban')->insert([
                'id_kuesioner' => $nomor,
                'jawaban' => $jawaban,
                'username' => $session_id
            ]);
        }

        return redirect()->route('question.questionnaire')->with('success', 'Anda telah berhasil mengisi secara lengkap');
    }
}

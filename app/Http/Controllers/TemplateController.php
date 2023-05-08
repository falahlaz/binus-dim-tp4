<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TemplateController extends Controller
{
    // template
    public function template()
    {
        if (!Session::has('username')) {
            return redirect()->route('index')->with('error', 'Anda harus login terlebih dahulu');
        }

        $session_id = Session::get('username');
        $answers = (object) [
            "demension1" => $this->getAnswers(1),
            "demension2" => $this->getAnswers(2),
            "demension3" => $this->getAnswers(3),
            "demension4" => $this->getAnswers(4),
        ];
        $kpis = (object) [
            "kpi1" => $this->getKPI($answers->demension1, 1),
            "kpi2" => $this->getKPI($answers->demension2, 2),
            "kpi3" => $this->getKPI($answers->demension3, 3),
            "kpi4" => $this->getKPI($answers->demension4, 4),
        ];
        
        return view('template', compact('session_id', 'answers', 'kpis'));
    }

    private function getAnswers($id_dimensi)
    {
        return DB::table('jawaban')
        ->join('tbkuesioner', function (JoinClause $join) use ($id_dimensi) {
            $join->on('tbkuesioner.id_kuesioner', '=', 'jawaban.id_kuesioner')->where('tbkuesioner.id_dimensi', '=', $id_dimensi);
        })
        ->select(DB::raw("jawaban,CASE jawaban
            WHEN 'A' THEN Count(jawaban)*1 
            WHEN 'B' THEN COUNT(jawaban)*2 
            WHEN 'C' THEN COUNT(jawaban)*3 
            WHEN 'D' THEN COUNT(jawaban)*4 
            WHEN 'E' THEN COUNT(jawaban)*5 
            END as jumlah"))
        ->groupBy('jawaban')
        ->get();
    }

    private function getKPI($answers, $id_dimensi)
    {
        $total = 0;
        $kategori_kpi = "";

        foreach ($answers as $answer) {
            $total += $answer->jumlah;
        }

        $bobot_kinerja = $this->getBobotKinerja($total, $id_dimensi);

        $dimension = DB::table('tbdimensi')->select('dimensi', 'bobot')->where('id_dimensi', '=', $id_dimensi)->first();

        $KPI=($bobot_kinerja/$dimension->bobot)*100;
        //kesimpulan
        if (($KPI>=1) and ($KPI<=20)) {
            $kategori_kpi="Tidak Baik";
        } elseif (($KPI>=21) and ($KPI<=40)) {
            $kategori_kpi="Kurang";
        } elseif (($KPI>=41) and ($KPI<=60)) {
            $kategori_kpi="Cukup";
        } elseif (($KPI>=61) and ($KPI<=80)) {
            $kategori_kpi="Baik";
        } else {
            $kategori_kpi="Sangat Baik";
        }
        
        return (object) [
            "kpi" => $KPI,
            "summary" => "Kesimpulan KPI adalah " . $kategori_kpi
        ];
    }

    private function getBobotKinerja($total, $id_dimensi)
    {
        switch ($id_dimensi) {
            case 1:
                return $this->bobotDimension1($total);
            case 2:
                return $this->bobotDimension2($total);
            case 3:
                return $this->bobotDimension3($total);
            case 4:
                return $this->bobotDimension4($total);
        }
    }

    private function bobotDimension1($total)
    {
        if (($total>=27) and ($total<=48.6)) {
            return 1;
        } elseif (($total>=48.7) and ($total<=70.2)) {
            return 2;
        } elseif (($total>=70.3) and ($total<=91.8)) {
            return 3;
        } elseif (($total>=91.9) and ($total<=113.4)) {
            return 4;
        } else {
            return 5;
        }
    }
    
    private function bobotDimension2($total)
    {
        if (($total>=14) and ($total<=25.3)) {
            return 1;
        } elseif (($total>=25.2) and ($total<=36.4)) {
            return 2;
        } elseif (($total>=36.5) and ($total<=47.6)) {
            return 3;
        } elseif (($total>=47.7) and ($total<=58.8)) {
            return 4;
        } else {
            return 5;
        }
    }

    private function bobotDimension3($total)
    {
        if (($total>=12) and ($total<=21.6)) {
            return 1;
        } elseif (($total>=21.7) and ($total<=31.2)) {
            return 2;
        } elseif (($total>=31.3) and ($total<=40.8)) {
            return 3;
        } elseif (($total>=40.9) and ($total<=50.4)) {
            return 4;
        } else {
            return 5;
        }
    }

    private function bobotDimension4($total)
    {
        if (($total>=13) and ($total<=23.4)) {
            return 1;
        } elseif (($total>=23.5) and ($total<=33.8)) {
            return 2;
        } elseif (($total>=33.9) and ($total<=44.2)) {
            return 3;
        } elseif (($total>=44.3) and ($total<=54.6)) {
            return 4;
        } else {
            return 5;
        }
    }
}

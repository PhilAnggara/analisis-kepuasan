<?php

namespace App\Helpers;

use App\Models\Kusioner;
use App\Models\Responden;
use Carbon\Carbon;

class MyFunction
{
    public static function total($item)
    {
        $result = collect();
        foreach ($item->pertanyaan as $pertanyaan) {
            $result->push([
                'harapan' => $pertanyaan->jawaban->where('persepsi', '!=', null)->sum('harapan'),
                'persepsi' => $pertanyaan->jawaban->where('persepsi', '!=', null)->sum('persepsi'),
            ]);
        }
        return $result;
    }
    
    public static function mean($total, $responden)
    {
        $result = collect();
        $loopIndex = 0;
        foreach ($total as $t) {
            $result->push([
                'harapan' => $t['harapan'] / $responden->count(),
                'persepsi' => $t['persepsi'] / $responden->count(),
            ]);
            $loopIndex++;
        }
        return $result;
    }
    
    public static function wfws($mean)
    {
        $result = collect();
        foreach ($mean as $m) {
            $result->push([
                'wf' => $m['harapan'] / $mean->sum(['harapan']) * 100,
                'ws' => ($m['harapan'] / $mean->sum(['harapan']) * 100) * $m['persepsi'],
            ]);
        }
        return $result;
    }
    
    public static function wt($wfws)
    {
        $result = $wfws->sum(['ws']);
        return $result;
    }
    
    public static function csi($wt)
    {
        $result = $wt / 4;
        return $result;
    }
    
    public static function gap($mean)
    {
        $result = collect();
        $loopIndex = 0;
        foreach ($mean as $m) {
            $result->push([
                'index' => $loopIndex,
                'harapan' => $m['harapan'],
                'persepsi' => $m['persepsi'],
                'gap' => $m['persepsi'] - $m['harapan'],
            ]);
            $loopIndex++;
        }
        $result = $result->sortByDesc('gap');
        $result2 = collect();
        $rank = 1;
        $gapNow = 1000;
        foreach ($result as $r) {
            if ($gapNow != 1000 && $gapNow > $r['gap']) {
                $rank++;
            }
            $result2->push([
                'index' => $r['index'],
                'harapan' => $r['harapan'],
                'persepsi' => $r['persepsi'],
                'gap' => $r['gap'],
                'rank' => $rank,
            ]);
            $gapNow = $r['gap'];
        }
        return $result2->sortBy('index');
    }



    public static function respondenBulanan()
    {
        $result = collect();
        
        $responden = collect();
        $bulan = collect();
        for ($i=0; $i < 12; $i++) {
            $bulan->push(Carbon::parse(Carbon::now()->subMonths(11 - $i))->isoFormat('MMM'));
            $responden->push(Responden::whereMonth('created_at', Carbon::now()->subMonths(11 - $i))->count());
        }

        $result->push([
            'bulan' => $bulan,
            'jumlah' => $responden,
        ]);

        return $result;
    }
}

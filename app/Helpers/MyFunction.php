<?php

namespace App\Helpers;

use App\Models\Kusioner;
use App\Models\Responden;

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
                'gap' => $m['harapan'] - $m['persepsi'],
            ]);
            $loopIndex++;
        }
        $result = $result->sortByDesc('gap');
        $result2 = collect();
        $rank = 1;
        foreach ($result as $r) {
            $result2->push([
                'index' => $r['index'],
                'harapan' => $r['harapan'],
                'persepsi' => $r['persepsi'],
                'gap' => $r['gap'],
                'rank' => $rank,
            ]);
            $rank++;
        }
        return $result2->sortBy('index');
    }
}

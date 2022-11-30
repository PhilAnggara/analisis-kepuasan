<?php

namespace App\Http\Controllers;

use App\Helpers\MyFunction;
use App\Models\Kusioner;
use App\Models\Responden;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $items = Kusioner::where('show', true)->get();
        return view('pages.beranda', [
            'items' => $items,
        ]);
    }
    
    public function harapan(Kusioner $item)
    {
        return view('pages.harapan', [
            'item' => $item,
        ]);
    }
    
    public function persepsi(Kusioner $item)
    {
        $responden = $item->responden()->where('selesai', 0)->get();
        return view('pages.persepsi', [
            'item' => $item,
            'responden' => $responden,
        ]);
    }
    
    public function admin()
    {
        return view('pages.admin.beranda');
    }

    public function adminKusioner()
    {
        $items = Kusioner::all();
        return view('pages.admin.kusioner', [
            'items' => $items,
        ]);
    }

    public function analisis()
    {
        $items = Kusioner::all();
        return view('pages.admin.analisis', [
            'items' => $items,
        ]);
    }

    public function analisisDetail($id)
    {
        $item = Kusioner::find($id)->with('responden.jawaban')->first();
        $responden = Responden::where('id_kusioner', $item->id)->where('selesai',1)->get();
        $total = MyFunction::total($item);
        $mean = MyFunction::mean($total, $responden);
        $wfws = MyFunction::wfws($mean);
        $wt = MyFunction::wt($wfws);
        $csi = MyFunction::csi($wt);
        $gap = MyFunction::gap($mean);

        return view('pages.admin.analisis-detail', [
            'item' => $item,
            'responden' => $responden,
            'total' => $total,
            'mean' => $mean,
            'wfws' => $wfws,
            'wt' => $wt,
            'csi' => $csi,
            'gap' => $gap,
        ]);
    }
}

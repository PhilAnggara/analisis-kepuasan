<?php

namespace App\Http\Controllers;

use App\Models\Kusioner;
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
        return view('pages.admin.kusioner');
    }

    public function analisis()
    {
        return view('pages.admin.analisis');
    }
}

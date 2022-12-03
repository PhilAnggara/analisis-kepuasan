<?php

namespace App\Http\Controllers;

use App\Helpers\MyFunction;
use App\Models\Jawaban;
use App\Models\Kusioner;
use App\Models\Responden;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $items = Kusioner::where('show', true)->get();
        return view('pages.beranda-harapan', [
            'items' => $items,
        ]);
    }
    
    public function indexPersepsi()
    {
        $items = Kusioner::where('show', true)->get();
        return view('pages.beranda-persepsi', [
            'items' => $items,
        ]);
    }
    
    public function harapan(Kusioner $item)
    {
        return view('pages.harapan', [
            'item' => $item,
        ]);
    }
    
    public function harapanStore(Request $request)
    {
        // dd($request->all());
        $responden = Responden::create([
            'id_kusioner' => $request->id_kusioner,
            'nama' => $request->nama,
            'telp' => $request->telp,
            'pendidikan' => $request->pendidikan,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'kunjungan' => $request->kunjungan,
        ]);

        foreach ($request->pertanyaan as $key => $value) {
            Jawaban::create([
                'id_responden' => $responden->id,
                'id_pertanyaan' => $key,
                'harapan' => $value,
            ]);
        }

        return redirect()->route('beranda')->with('success', 'Jawaban berhasil dikirim!');
    }
    
    public function persepsi(Kusioner $item)
    {
        $responden = $item->responden()->where('selesai', 0)->get()->shuffle();
        $responden2 = $responden->shuffle();

        return view('pages.persepsi', [
            'item' => $item,
            'responden' => $responden,
            'responden2' => $responden2,
        ]);
    }
    
    public function persepsiStore(Request $request)
    {
        $responden = Responden::find($request->id_responden);
        $jawaban = Jawaban::where('id_responden', $request->id_responden)->get();

        $responden->update([
            'selesai' => 1,
        ]);
        foreach ($jawaban as $j) {
            $j->update([
                'persepsi' => $request->pertanyaan[$j->id_pertanyaan],
            ]);
        }

        return redirect()->route('beranda-persepsi')->with('success', 'Jawaban berhasil dikirim!');
    }
    
    public function admin()
    {
        return view('pages.admin.beranda');
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

        return view('pages.admin.kusioner-analisis', [
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

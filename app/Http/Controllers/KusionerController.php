<?php

namespace App\Http\Controllers;

use App\Models\Kusioner;
use App\Models\Pertanyaan;
use App\Models\Responden;
use Illuminate\Http\Request;

class KusionerController extends Controller
{
    public function index()
    {
        $items = Kusioner::all()->sortDesc();
        return view('pages.admin.kusioner', [
            'items' => $items,
        ]);
    }

    public function create()
    {
        return view('pages.admin.kusioner-create');
    }

    public function store(Request $request)
    {
        // return response()->json($request->all());

        $recents = Kusioner::where('show', 1)->get();
        foreach ($recents as $recent) {
            $recent->show = 0;
            $recent->save();
        }

        $kusioner = Kusioner::create([
            'nama_kusioner' => $request->nama_kusioner,
            'deskripsi' => $request->deskripsi,
        ]);

        foreach ($request->pertanyaan as $p) {
            Pertanyaan::create([
                'id_kusioner' => $kusioner->id,
                'harapan' => $p['harapan'],
                'persepsi' => $p['persepsi'],
            ]);
        }

        return redirect()->route('kusioner.index')->with('success', 'Kusioner berhasil dibuat!');
    }

    public function show($id)
    {
        $item = Kusioner::findOrFail($id);
        $pertanyaan = Pertanyaan::where('id_kusioner', $id)->get();
        $responden = Responden::where('id_kusioner', $id)->get();
        return view('pages.admin.kusioner-detail', [
            'item' => $item,
            'pertanyaan' => $pertanyaan,
            'responden' => $responden,
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = Kusioner::findOrFail($id);
        $item->update($data);

        return redirect()->back()->with('success', 'Kusioner berhasil diubah!');
    }

    public function destroy($id)
    {
        //
    }
}

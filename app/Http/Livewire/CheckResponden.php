<?php

namespace App\Http\Livewire;

use App\Models\Kusioner;
use App\Models\Responden;
use Livewire\Component;

class CheckResponden extends Component
{
    public $item;
    public $responden;
    public $responden2;

    public $idResponden = '';
    public $nomorAntrian = '';

    public $authorized;
    public $namaResponden;

    public function render()
    {
        return view('livewire.check-responden');
    }

    public function updatedNomorAntrian()
    {
        $res = Responden::find($this->idResponden);
        if ($res->no_antrian == $this->nomorAntrian) {
            $this->authorized = true;
            $this->namaResponden = $res->nama;
        } else {
            return redirect()->route('beranda-persepsi');
        }
    }
}

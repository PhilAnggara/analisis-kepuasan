<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ButtonToggle extends Component
{
    public $item;

    public function render()
    {
        return view('livewire.button-toggle');
    }

    public function switch()
    {
        $this->item->update(['show' => !$this->item->show]);
    }
}

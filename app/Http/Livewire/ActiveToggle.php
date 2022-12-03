<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ActiveToggle extends Component
{
    public $item;
    public $check;

    public function mount($item)
    {
        $this->check = $item->show;
    }

    public function render()
    {
        return view('livewire.active-toggle');
    }

    public function updatedCheck()
    {
        $this->item->update(['show' => $this->check]);
    }
}

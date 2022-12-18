<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SwitchToggle extends Component
{
    public $item;
    public $check;

    public function mount($item)
    {
        $this->check = $item->show;
    }

    public function render()
    {
        return view('livewire.switch-toggle');
    }

    public function updatedCheck()
    {
        $this->item->update(['show' => $this->check]);
    }
}

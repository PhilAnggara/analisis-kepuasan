<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Question extends Component
{
    public $count = 1;
     
    public function addNew()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.question');
    }
}

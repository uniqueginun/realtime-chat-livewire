<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $name = "othman mohammed";

    public function render()
    {
        return view('livewire.counter');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 3;
    public int $number;

    public function changeCount(int $num)
    {
        $this->count = $num;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('components.navbar');
    }

    public function mount() {}

    public function booted()
    {
        $this->dispatchBrowserEvent('init-navbar');
    }
}

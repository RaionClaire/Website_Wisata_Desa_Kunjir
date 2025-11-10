<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\PlanTrip;

class SectionPlanTrip extends Component
{
    public $cards = [];
    public $showModal = false;
    public $selectedCard = null;

    public function mount()
    {
        $this->cards = PlanTrip::latest()->get()->map(function ($trip) {
            return [
                'img' => asset('storage/' . $trip->image),
                't' => $trip->title,
                'e' => $trip->excerpt,
                'desc' => $trip->description,
                'user' => $trip->user->name ?? '-',
            ];
        })->toArray();
    }

    public function openModal($index)
    {
        $this->selectedCard = $this->cards[$index];
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.components.section-plan-trip');
    }
}

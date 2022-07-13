<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Besoin as BesoinModel;

class Besoin extends Component
{
    public $besoin;

    public function mount($id)
    {
        $this->besoin = BesoinModel::find($id);
    }

    public function render()
    {
        return view('livewire.besoin')
        ->layout('components.layouts.app');
    }
}

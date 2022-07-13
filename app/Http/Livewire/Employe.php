<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employe as EmployeModel;

class Employe extends Component
{
    public $employe;

    public function mount($id)
    {
        $this->employe = EmployeModel::find($id);
    }

    public function render()
    {
        return view('livewire.employe')
        ->layout('components.layouts.app');
    }
}

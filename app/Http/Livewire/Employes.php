<?php

namespace App\Http\Livewire;
use App\Models\Employe;

use Livewire\Component;

class Employes extends Component
{
    public $employe;
    public $employes;
    public $login;
    public $pays;

    public function delete($id)
    {
        $this->employe = Employe::find($id);
        $this->employe->delete();
        $this->emit('employeDeleted');
    }

    public function saveEmploye()
    {
        $validatedData = $this->validate([
            'login' => 'required|min:3|max:50',
            'pays' => 'required',
        ]);

        Employe::create($validatedData);
        $this->emit('employeCreated');
    }

    public function render()
    {
        $this->employes = Employe::all();

        return view('livewire.employes', [
            'employes' => $this->employes,
        ])->layout('components.layouts.app');
    }
}

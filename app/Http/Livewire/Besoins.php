<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Besoin;
use App\Models\Employe;

class Besoins extends Component
{
    public $besoin;
    public $besoins;
    public $employes;
    public $materiel_a_remplacer;
    public $materiel_souhaite;
    public $date_souhaite;
    public $commentaire;
    public $employe_id;

    public function delete($id)
    {
        $this->besoin = Besoin::find($id);
        $this->besoin->delete();
        //$this->emit('besoinDeleted');
    }

    public function saveBesoin()
    {
       Besoin::create(
            [
                'materiel_a_remplacer' => $this->materiel_a_remplacer,
                'materiel_souhaite' => $this->materiel_souhaite,
                'date_souhaite' => $this->date_souhaite,
                'commentaire' => $this->commentaire,
                'employe_id' => $this->employe_id,
            ]
        );
        $this->emit('besoinCreated');
    }

    public function render()
    {
        $this->besoins = Besoin::all();
        $this->employes = Employe::all();

        return view('livewire.besoins', [
            'besoins' => $this->besoins, 'employes' => $this->employes
        ])->layout('components.layouts.app');
    }
}

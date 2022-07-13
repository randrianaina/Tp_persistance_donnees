<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Besoin extends Model
{
    use HasFactory;
    protected $fillable = ['materiel_a_remplacer','materiel_souhaite','date_souhaite','commentaire','employe_id'];
      /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

     /**
     * Get the employee associated with the need.
     */
    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }
}

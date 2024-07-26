<?php

// app/Models/Voyage.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    use HasFactory;

    protected $fillable = [
        'ville_depart_id',
        'ville_arrivee_id',
        'date',
        'heure_depart',
        'heure_arrivee',
        'duree',
        'prix',
    ];

    public function villeDepart()
    {
        return $this->belongsTo(Ville::class, 'ville_depart_id');
    }

    public function villeArrivee()
    {
        return $this->belongsTo(Ville::class, 'ville_arrivee_id');
    }

    public function getImageVilleArriveeAttribute()
    {
        return $this->villeArrivee->image ?? $this->villeDepart->image;
    }

    public function calculerDuree()
    {
        $heureDepart = new \DateTime($this->heure_depart);
        $heureArrivee = new \DateTime($this->heure_arrivee);

        $difference = $heureArrivee->diff($heureDepart);

        return $difference->format('%H heures %I minutes');
    }
}

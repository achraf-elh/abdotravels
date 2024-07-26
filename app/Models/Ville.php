<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'image',
    ];

    // Optionally, if you want the inverse relationship
    public function voyagesDepart()
    {
        return $this->hasMany(Voyage::class, 'ville_depart_id');
    }

    public function voyagesArrivee()
    {
        return $this->hasMany(Voyage::class, 'ville_arrivee_id');
    }
}

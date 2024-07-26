<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    // Dans le modèle Reservation
protected $fillable = ['voyage_id', 'nom', 'prenom', 'email', 'telephone'];


    public function passagers()
    {
        return $this->hasMany(Passager::class);
    }

    public function voyage()
    {
        return $this->belongsTo(Voyage::class);
    }
}

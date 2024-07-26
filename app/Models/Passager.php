<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passager extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservation_id',
        'prenom',
        'nom',
        'email',
        'numero_de_telephone',
        'type_document',
        'numero_document',
        'categorie_age',
        'numero_siege',
    ];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }

    protected static function booted()
    {
        static::creating(function ($passager) {
            $passager->numero_siege = Passager::where('reservation_id', $passager->reservation_id)->count() + 1;
        });
    }
}

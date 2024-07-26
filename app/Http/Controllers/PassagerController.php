<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Passager;
use App\Models\Ville;
use App\Models\Voyage;

class PassagerController extends Controller
{
    public function create(){
        $voyages = Voyage::all();
        $villes = Ville::all();
        return view('travel.booking', compact('voyages','villes'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'numero_de_telephone' => 'required|string|max:20',
            'type_document' => 'required|string|in:Carte d\'identité,Passeport',
            'numero_document' => 'required|string|max:255',
            'categorie_age' => 'required|string|in:Adulte,Enfant,Bébé',
            'voyage_id' => 'required|exists:voyages,id',
            'date_depart' => 'required|date',
            'prix_total' => 'required|numeric',
        ]);

        // Créer une nouvelle réservation
        $reservation = Reservation::create([
            'voyage_id' => $request->voyage_id,
            'date_reservation' => now(),
            'date_depart' => $request->date_depart,
            'prix_total' => $request->prix_total,
            'statut' => 'En attente',
        ]);

        // Créer un nouveau passager
        Passager::create([
            'reservation_id' => $reservation->id,
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'email' => $request->email,
            'numero_de_telephone' => $request->numero_de_telephone,
            'type_document' => $request->type_document,
            'numero_document' => $request->numero_document,
            'categorie_age' => $request->categorie_age,
            'numero_place' => $this->generateSeatNumber($reservation->id),
        ]);

        return redirect()->route('booking.success')->with('success', 'Réservation effectuée avec succès!');
    }

    private function generateSeatNumber($reservation_id)
    {
        // Logique pour générer un numéro de siège unique
        $occupiedSeats = Passager::where('reservation_id', $reservation_id)->pluck('numero_place')->toArray();
        for ($seatNumber = 1; $seatNumber <= 50; $seatNumber++) {
            if (!in_array($seatNumber, $occupiedSeats)) {
                return $seatNumber;
            }
        }
        return null; // Retourne null si tous les sièges sont occupés (optionnel)
    }
}

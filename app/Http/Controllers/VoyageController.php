<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VoyageController extends Controller
{
    public function index()
    {
        $voyages = Voyage::with(['villeDepart', 'villeArrivee'])->orderBy('created_at', 'desc')->paginate(5);
        return view('voyages.index', compact('voyages'));
    }

    public function create()
    {
        $villes = Ville::all();
        return view('voyages.create', compact('villes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ville_depart_id' => 'required|exists:villes,id|different:ville_arrivee_id',
            'ville_arrivee_id' => 'required|exists:villes,id|different:ville_depart_id',
            'date' => 'required|date|date_format:Y-m-d',
            'heure_depart' => 'required|date_format:H:i|different:heure_arrivee',
            'heure_arrivee' => 'required|date_format:H:i|different:heure_depart',
            'prix' => 'required|integer|min:1',
        ]);

        $voyage = Voyage::create($request->all());

        return redirect()->route('voyages.index',compact('voyage'))->with('success', 'Voyage ajouté avec succès.');
    }

    public function edit($id)
    {
        $voyage = Voyage::findOrFail($id);
        $villes = Ville::all();
        return view('voyages.edit', compact('voyage', 'villes'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'ville_depart_id' => 'required|exists:villes,id|different:ville_arrivee_id',
            'ville_arrivee_id' => 'required|exists:villes,id|different:ville_depart_id',
            'date' => 'required|date|date_format:Y-m-d',
            'heure_depart' => 'required|date_format:H:i|different:heure_arrivee',
            'heure_arrivee' => 'required|date_format:H:i|different:heure_depart',
            'prix' => 'required|integer|min:1',
        ]);
    
        $voyage = Voyage::findOrFail($id);
        $voyage->update($request->all());
    
        return redirect()->route('voyages.index')->with('success', 'Voyage modifié avec succès.');
    }
    
    public function destroy($id)
    {
        $voyage = Voyage::findOrFail($id);
        $voyage->delete();
    
        return redirect()->route('voyages.index')->with('success', 'Voyage supprimé avec succès.');
    }  

    public function search(Request $request)
    {
    $request->validate([
        'ville_depart_id' => 'required|exists:villes,id',
        'ville_arrivee_id' => 'required|exists:villes,id',
        'date' => 'required|date|date_format:Y-m-d',
    ]);

    // Recherche de voyages spécifiques à la date
    $voyages = Voyage::with(['villeDepart', 'villeArrivee'])
        ->where('ville_depart_id', $request->ville_depart_id)
        ->where('ville_arrivee_id', $request->ville_arrivee_id)
        ->where('date', $request->date)
        ->get();

    if ($voyages->isEmpty()) {
        // Rechercher uniquement par ville de départ et d'arrivée
        $voyages = Voyage::with(['villeDepart', 'villeArrivee'])
            ->where('ville_depart_id', $request->ville_depart_id)
            ->where('ville_arrivee_id', $request->ville_arrivee_id)
            ->get();

        if ($voyages->isEmpty()) {
            // Rechercher uniquement par ville d'arrivée
            $voyages = Voyage::with(['villeDepart', 'villeArrivee'])
                ->where('ville_arrivee_id', $request->ville_arrivee_id)
                ->get();

            if ($voyages->isEmpty()) {
                // Redirection vers la page des offres avec un message d'alerte
                return redirect()->route('travel.offres')->with('alert', 'Le voyage que vous avez sélectionné n\'est pas disponible actuellement. Voici les voyages disponibles.');
            }
        }
    }

    // Supprimer les doublons basés sur l'identifiant unique du voyage
    $voyages = $voyages->unique('id');

    // Log des voyages pour vérification
    Log::info('Voyages uniques:', $voyages->toArray());

    return view('travel.search-results', compact('voyages'));
}



public function showOffres()
{
    $voyages = Voyage::with(['villeDepart', 'villeArrivee'])->get();
    return view('travel.offres', compact('voyages'));
}
public function show($id)
{
    $voyage = Voyage::with(['villeDepart', 'villeArrivee'])->findOrFail($id);
    return view('travel.book', compact('voyage'));
}

}

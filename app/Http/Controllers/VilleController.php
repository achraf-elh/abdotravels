<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use Illuminate\Http\Request;

class VilleController extends Controller
{
    //

    public function index(){
        $villes = Ville::orderBy('created_at', 'desc')->paginate(5);
        return view('villes/index')->with([
            'villes' => $villes
        ]);
    }
    
    public function create(){
        return view('villes/villes');
    }

    public function store(Request $request){
        // Validation des données
        $request->validate([
            'nom' => 'required|string|unique:villes|max:30', 
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Validation de l'image
        ]);
    
        // Gestion de l'image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $image_name); // Sauvegarder l'image dans le dossier 'uploads'
        } else {
            $image_name = 'default_image.jpg'; // Nom par défaut si aucune image n'est téléchargée
        }
    
        // Création de la ville avec le nom et l'image
        Ville::create([
            'nom' => $request->input('nom'),
            'image' => $image_name
        ]);
    
        return redirect()->route('villes.index')->with([
            'success' => 'Ville ajoutée avec succès'
        ]);
    }
    
    public function edit($id){
        $villes=Ville::where('id',$id)->first();
        return view('villes/edit')->with([
            'villes'=>$villes
        ]);
    }
    public function update(Request $request, $id)
{
    $villes = Ville::where('id', $id)->firstOrFail();

    // Validation des données
    $request->validate([
        'nom' => 'required|string|unique:villes,nom,' . $id . '|max:30', // Permettre le nom actuel de l'ignorer pour l'unicité
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Validation de l'image
    ]);

    // Gestion de l'image
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $image_name = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $image_name); // Sauvegarder l'image dans le dossier 'uploads'

        // Supprimer l'ancienne image si elle n'est pas par défaut
        if ($villes->image && $villes->image !== 'default_image.jpg') {
            $old_image_path = public_path('uploads') . '/' . $villes->image;
            if (file_exists($old_image_path)) {
                unlink($old_image_path);
            }
        }
    } else {
        $image_name = $villes->image; // Conserver l'ancienne image si aucune nouvelle image n'est téléchargée
    }

    // Mise à jour de la ville avec le nom et l'image
    $villes->update([
        'nom' => $request->input('nom'),
        'image' => $image_name
    ]);

    return redirect()->route('villes.index')->with([
        'success' => 'Ville modifiée avec succès'
    ]);
}
public function delete($id)
{
    $villes = Ville::where('id', $id)->firstOrFail();

    // Supprimer l'image associée si elle n'est pas l'image par défaut
    if ($villes->image && $villes->image !== 'default_image.jpg') {
        $image_path = public_path('uploads') . '/' . $villes->image;
        if (file_exists($image_path)) {
            unlink($image_path);
        }
    }

    // Supprimer la ville de la base de données
    $villes->delete();

    return redirect()->route('villes.index')->with([
        'success' => 'Ville supprimée avec succès'
    ]);
}
public function showvilles()
{
    $villes = Ville::orderBy('created_at', 'desc')->paginate(6);
    return view('travel.home', compact('villes'));
}

}

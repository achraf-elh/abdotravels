<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    //
    public function index(){
        $utilisateurs = Utilisateur::orderBy('created_at', 'desc')->paginate(5);
        return view('utilisateurs/index')->with([
            'utilisateurs' => $utilisateurs
        ]);
    }
    public function create(){
        return view('utilisateurs/create');
    }
    public function store(Request $request){
        $request->validate([
            'nom' => 'required|string|min:3|max:75', 
            'prenom' => 'required|string|min:3|max:75', 
            'email' => 'required|string|unique:utilisateurs|max:255', 
            'tel' => 'required|numeric|unique:utilisateurs|min:10', 
            'pass' => 'required|string|max:255', 
        ]);
        $utilisateurs = $request->all();
        Utilisateur::create($utilisateurs);
        return redirect()->route('utilisateurs.index')->with([
            'success' => 'utilisateur ajouté avec succes'
        ]);
    }
    public function edit($id){
        $utilisateurs=Utilisateur::where('id',$id)->first();
        return view('utilisateurs/edit')->with([
            'utilisateurs'=>$utilisateurs
        ]);
    }
    public function update(Request $request, $id) {
        $utilisateurs = Utilisateur::findOrFail($id);
    
        $request->validate([
            'nom' => 'required|string|min:3|max:75', 
            'prenom' => 'required|string|min:3|max:75', 
            'email' => 'required|string|max:255|unique:utilisateurs,email,' . $id, 
            'tel' => 'required|numeric|min:10|unique:utilisateurs,tel,' . $id, 
            'pass' => 'required|string|max:255', 
        ]);
    
        $utilisateurs->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'tel' => $request->tel,
            'pass' => $request->pass,
        ]);
    
        return redirect()->route('utilisateurs.index')->with([
            'success' => 'utilisateur modifié avec succes'
        ]);
    }
    
    public function delete($id){
        
        $utilisateurs = Utilisateur::where('id', $id)->firstOrFail();
        $utilisateurs->delete();
        return redirect()->route('utilisateurs.index')->with([
            'success' => 'utilisateur supprimé avec succes'
        ]);
    }
}

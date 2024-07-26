<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function sendContactMail(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Envoi de l'email
        Mail::to('achraf.elhaoumi44@gmail.com')->send(new ContactMail($request->all()));

        // Redirection avec un message de succès
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}

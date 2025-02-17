<?php

namespace App\Http\Controllers;

use App\Models\DemandeAmitie;
use App\Models\User;
use Illuminate\Http\Request;

class DemandeAmitieController extends Controller
{
    // Méthode pour envoyer une demande d'amitié
    public function envoyerDemandeAmitie($utilisateur_recepteur_id)
    {
        // Récupérer l'utilisateur connecté
        $utilisateur_demandeur = auth()->user();

        // Vérifier si la demande existe déjà
        if (DemandeAmitie::where('utilisateur_demandeur_id', $utilisateur_demandeur->id)
            ->where('utilisateur_recepteur_id', $utilisateur_recepteur_id)
            ->exists()) {
            return response()->json(['message' => 'Demande déjà envoyée'], 400);
        }

        // Créer une nouvelle demande d'amitié
        $demande = new DemandeAmitie();
        $demande->utilisateur_demandeur_id = $utilisateur_demandeur->id;
        $demande->utilisateur_recepteur_id = $utilisateur_recepteur_id;
        $demande->envoyer(); // Envoie la demande

        return response()->json(['message' => 'Demande envoyée avec succès'], 200);
    }

    // Méthodes pour accepter ou refuser la demande peuvent être ajoutées ici
}

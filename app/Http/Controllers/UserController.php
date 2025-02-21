<?php

namespace App\Http\Controllers;
use App\Models\DemandeAmitie;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function Search(Request $request)
    {
        $request->validate([
            'query' => 'required|string|min:2',
        ]);
        $query = $request->input('query');
        $users = User::whereRaw("LOWER(pseudo) LIKE LOWER(?)", ["%$query%"])
            ->orWhereRaw("LOWER(email) LIKE LOWER(?)", ["%$query%"])
            ->orWhereRaw("LOWER(prenom) LIKE LOWER(?)", ["%$query%"])
            ->orWhereRaw("LOWER(name) LIKE LOWER(?)", ["%$query%"])
            ->simplePaginate(10);
        return view('dashboard', [
            'users' => $users ,
            'message' => $users->isEmpty() ? 'Aucun utilisateur trouvé.' : null,
        ]);
    }


    public function envoyerDemandeAmitie($utilisateur_recepteur_id)
    {
        $utilisateur_demandeur = auth()->user();
        if (DemandeAmitie::where('utilisateur_demandeur_id', $utilisateur_demandeur->id)
            ->where('utilisateur_recepteur_id', $utilisateur_recepteur_id)
            ->exists()) {
            return view('dashboard', [
                'message' =>  'Demande déjà envoyée.'
            ]);
        }
        $demande = new DemandeAmitie();
        $demande->utilisateur_demandeur_id = $utilisateur_demandeur->id;
        $demande->utilisateur_recepteur_id = $utilisateur_recepteur_id;
        $demande->envoyer();
        return view('dashboard', [
            'message' =>  'Demande envoyée avec succès.'
        ]);
    }






}

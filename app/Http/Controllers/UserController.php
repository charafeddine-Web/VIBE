<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DemandeAmitieController;


class UserController extends Controller
{
    public function searchUser(Request $request){

    }
    public function envoyerDemandeAmitie($utilisateur_destinataire_id) {
        $demande = new DemandeAmitieController($this->id, $utilisateur_destinataire_id);
        $demande->envoyer();
    }
}

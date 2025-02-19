<?php

namespace App\Http\Controllers;

use App\Models\DemandeAmitie;
use Illuminate\Http\Request;

class AmisController extends Controller
{
    public function afficherDemandesAmitie(){
        $utilisateur = auth()->user();
        $demandesEnvoyees=DemandeAmitie::where('utilisateur_demandeur_id', $utilisateur->id)
            ->with('demandeur')
            ->get();
        $demandesRecues=DemandeAmitie::where('utilisateur_recepteur_id', $utilisateur->id)
                                        ->where('statut', 'en attente')
                                        ->with('receveur')
                                        ->get();
        return view('amis', compact('demandesEnvoyees', 'demandesRecues'));
    }

    public function accepterDemandeAmitie($id){
            $utilisateur = auth()->user();
            $demandeaccepter=DemandeAmitie::where('id',$id)
                                            ->where ('statut','en attente')
                                            ->findOrFail($id);
        $demandeaccepter->accepter();

            return redirect()->route('afficherDemandesAmitie')->with('success', 'Demande d\'amitie accepter avec succes');
    }

    public function refuserDemandeAmitie($id){
        $utilistateur = auth()->user() ;

        $demanderejecter=DemandeAmitie::where('id',$id)
                                       ->where ('statut','en attente')
                                        ->findOrFail($id);

        $demanderejecter->refuser();
        return redirect()->route('afficherDemandesAmitie')->with('success', 'Demande d\'amitie refuser avec succes');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeAmitie extends Model
{
    use HasFactory;

    protected $table = 'demande_amitie';

    protected $fillable = [
        'utilisateur_demandeur_id',
        'utilisateur_recepteur_id',
        'statut',
    ];

    public function utilisateurDemandeur()
    {
        return $this->belongsTo(User::class, 'utilisateur_demandeur_id');
    }

    public function utilisateurRecepteur()
    {
        return $this->belongsTo(User::class, 'utilisateur_recepteur_id');
    }

    public function envoyer()
    {
        $this->save();
    }

    public function accepter()
    {
        $this->statut = 'accepté';
        $this->save();
    }

    public function refuser()
    {
        $this->statut = 'refusé';
        $this->save();
    }
}

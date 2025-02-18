<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeAmitieTable extends Migration
{
    /**
     * Exécute la migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_amitie', function (Blueprint $table) {
            $table->id();
            $table->foreignId('utilisateur_demandeur_id')->constrained('users')->onDelete('cascade'); // Utilisateur qui envoie la demande
            $table->foreignId('utilisateur_recepteur_id')->constrained('users')->onDelete('cascade'); // Utilisateur qui reçoit la demande
            $table->enum('statut', ['en attente', 'accepté', 'refusé'])->default('en attente'); // Statut de la demande
            $table->timestamps();
        });
    }

    /**
     * Rétrograde la migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demande_amitie');
    }
}

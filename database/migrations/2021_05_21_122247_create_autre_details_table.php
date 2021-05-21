<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutreDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autre_details', function (Blueprint $table) {
            $table->id();
            $table->date('date_premier_contact');
            $table->string('notes');
            $table->string('non_interesse_par_crm');
            $table->string('nombre_enfants');
            $table->string('ancien_nom');
            $table->date('date_changement_nom');
            $table->date('raison_changement_nom');
            $table->string('code_langue_courrier');
            $table->string('langues_parlees');
            $table->string('loisirs');
            $table->string('frequence_revue');
            $table->string('type_communication');
            $table->string('canal');
            $table->string('autres_details');
            $table->string('confidentialite');
            $table->string('commentaire');
            $table->string('pays_domicilation');
            $table->string('interdit_chequier');
            $table->date('date_entree_relation');







            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autre_details');
    }
}

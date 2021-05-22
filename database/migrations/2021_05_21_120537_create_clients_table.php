<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prénom');
            $table->string('sexe');
            $table->string('situation_familiale');
            $table->string('nom_prenom_pere');
            $table->string('nom_prenom_mere');
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->string('autres_natio');
            $table->string('vip');
            $table->string('statut');
            $table->string('nature');
            $table->string('capacite_juridique');
            $table->unsignedBigInteger('agence_id');
            $table->foreign('agence_id')->references('id')->on('agences');
            $table->unsignedBigInteger('adresse_id');
            $table->foreign('adresse_id')->references('id')->on('adresses');
            $table->unsignedBigInteger('relation_id');
            $table->foreign('relation_id')->references('id')->on('relations');
            $table->unsignedBigInteger('identite_id');
            $table->foreign('identite_id')->references('id')->on('identites');
            $table->unsignedBigInteger('professionnel_id');
            $table->foreign('professionnel_id')->references('id')->on('professionnels');
            $table->unsignedBigInteger('supplementaire_id');
            $table->foreign('supplementaire_id')->references('id')->on('supplementaires');
            $table->unsignedBigInteger('financiere_id');
            $table->foreign('financiere_id')->references('id')->on('info_financieres');
            $table->unsignedBigInteger('residence_id');
            $table->foreign('residence_id')->references('id')->on('info_residences');
            $table->unsignedBigInteger('connaissance_id');
            $table->foreign('connaissance_id')->references('id')->on('connaissances');

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
        Schema::dropIfExists('clients');
    }
}

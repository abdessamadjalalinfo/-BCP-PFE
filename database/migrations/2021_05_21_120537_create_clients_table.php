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

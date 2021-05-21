<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoFinancieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_financieres', function (Blueprint $table) {
            $table->id();
            $table->string('statut_emploi_principal');
            $table->string('activite');
            $table->string('profession');
            $table->string('poste_occupe');
            $table->string('nom_employeur');
            $table->string('domiciliation_salaire');
            $table->date('date_embauche');
            $table->string('revenu');
            $table->string('periodicite_salaire');
            $table->string('flux_net');
            $table->string('revenu_annuel');
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
        Schema::dropIfExists('info_financieres');
    }
}

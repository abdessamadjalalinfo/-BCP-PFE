<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConnaissancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connaissances', function (Blueprint $table) {
            $table->id();
            $table->string('cotation_risque');
            $table->string('date_dernier_revue_kyc');
            $table->string('date_auto_prochaine_revue_kyc');
            $table->string('date_manu_prochaine_revue_kyc');
            $table->string('date_dernier_revue_conformite');
            $table->string('date_auto_prochaine_revue_conformite');
            $table->string('date_manu_prochaine_revue_conformite');
            $table->string('contole_aml');
            $table->string('resultat_aml');
            $table->string('score');
            $table->string('instruction');
            $table->string('connaissance_client_complete');
            $table->string('prescripteur');









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
        Schema::dropIfExists('connaissances');
    }
}

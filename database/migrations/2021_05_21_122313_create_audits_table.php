<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audits', function (Blueprint $table) {
            $table->id();
            $table->string('override');
            $table->string('statut_enregistrement');
            $table->string('num_version');
            $table->string('resp_saisie');
            $table->string('date_heure');
            $table->string('resp_validation');
            $table->string('code');
            $table->string('code_dept');
            $table->string('code_auditeur');
            $table->date('date_audit');
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
        Schema::dropIfExists('audits');
    }
}

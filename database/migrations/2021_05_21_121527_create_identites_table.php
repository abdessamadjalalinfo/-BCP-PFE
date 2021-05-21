<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identites', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('numero');
            $table->string('nom_sur_piece');
            $table->string('lieu_delivrance');
            $table->string('date_delivrance');
            $table->string('date_fin_validite');
            $table->string('code_tribunal');
            $table->string('code_convention');
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
        Schema::dropIfExists('identites');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_paiements', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->string('periode');
            $table->string('nbSeances');
            $table->string('listSeances');
            $table->string('volumeHoraireTotal');
            $table->string('coutTotal');
            $table->string('valide');
            $table->string('rejete');
            $table->string('paye');
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
        Schema::dropIfExists('demande_paiements');
    }
}

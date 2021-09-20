<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('matricule');
            $table->string('nom_prenoms');
            $table->string('date_naissance');
            $table->string('genre');
            $table->string('service');
            $table->string('categorie');
            $table->string('salaire_par_heure');
            $table->string('date_debut_service');
            $table->string('volume_horaire');
            $table->string('photo');
            $table->string('email')->unique();
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
        Schema::dropIfExists('employes');
    }
}

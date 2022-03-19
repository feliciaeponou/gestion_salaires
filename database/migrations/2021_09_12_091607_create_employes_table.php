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
            $table->string('intitule_poste');
            $table->string('salaire_base');
            $table->string('sursalaire');
            $table->string('prime_transport');
            $table->string('numero_cnps');
            $table->string('date_embauche');
            $table->string('date_entree');
            $table->string('photo')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('suspendu');
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

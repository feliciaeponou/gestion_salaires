<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pointages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employe_id')->index();
            $table->string('matricule');
            $table->string('debutSeance');
            $table->string('debutPause');
            $table->string('finPause');
            $table->string('finSeance');
            $table->string('dateSeance');
            $table->string('volumeHoraire');
            $table->string('payee')->nullable();
            $table->timestamps();


            $table->foreign('employe_id')->references('id')->on('employes');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pointages');
    }
}

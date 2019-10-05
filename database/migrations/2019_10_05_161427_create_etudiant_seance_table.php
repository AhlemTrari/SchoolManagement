<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantSeanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiant_seance', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('etudiant_id')->unsigned();
            $table->integer('seance_id')->unsigned();
            $table->timestamps();

            $table-> foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
            $table-> foreign('seance_id')->references('id')->on('seances')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiant_seance');
    }
}

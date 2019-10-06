<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantsPaquetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants_paquets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('etudiant_id')->unsigned();
            $table->integer('paquet_id')->unsigned();
            $table->timestamps();

            $table-> foreign('etudiant_id')->references('id')->on('groupes')->onDelete('cascade');
            $table-> foreign('paquet_id')->references('id')->on('seances')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants_paquets');
    }
}

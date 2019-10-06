<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupesPaquetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupes_paquets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paquet_id')->unsigned();
            $table->integer('groupe_id')->unsigned();
            $table->timestamps();

            $table-> foreign('paquet_id')->references('id')->on('paquets')->onDelete('cascade');
            $table-> foreign('groupe_id')->references('id')->on('groupes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupes_paquets');
    }
}

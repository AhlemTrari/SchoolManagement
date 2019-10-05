<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupeSeanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupe_seance', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('groupe_id')->unsigned();
            $table->integer('seance_id')->unsigned();
            $table->timestamps();

            $table-> foreign('groupe_id')->references('id')->on('groupes')->onDelete('cascade');
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
        Schema::dropIfExists('groupe_seance');
    }
}

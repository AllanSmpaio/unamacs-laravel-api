<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMicrobiologiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('microbiologias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coliformes_termotolerantes');
            $table->string('coliformes_totais');
            $table->string('bacterias_aerobicas');
            $table->string('bacterias_mesofilas');
            $table->date('analise_realizada_em');
            $table->integer('lagoa_id')->unsigned();
            $table->foreign('lagoa_id')->references('id')->on('lagoas')->onDelete('cascade');
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
        Schema::dropIfExists('microbiologias');
    }
}

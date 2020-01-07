<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLagoaIntegradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lagoa_integradas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('lagoa_id')->unsigned();
            $table->bigInteger('fisicoquimica_id')->unsigned();
            $table->bigInteger('microbiologia_id')->unsigned();
            $table->bigInteger('locais_id')->unsigned();
            $table->foreign('lagoa_id')->references('id')->on('lagoas')->onDelete('cascade');
            $table->foreign('fisicoquimica_id')->references('id')->on('fisico_quimicas')->onDelete('cascade');
            $table->foreign('microbiologia_id')->references('id')->on('microbiologias')->onDelete('cascade');
            $table->foreign('locais_id')->references('id')->on('locals')->onDelete('cascade');
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
        Schema::dropIfExists('lagoa_integradas');
    }
}

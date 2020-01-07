<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFisicoQuimicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fisico_quimicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('turbidez');
            $table->string('solidos_totais');
            $table->string('condutividade');
            $table->string('ph');
            $table->string('nitrogenio');
            $table->string('oxigenio');
            $table->string('gas_carbonico');
            $table->string('temperatura');
            $table->string('cloretos');
            $table->string('dureza');
            $table->string('alcalinidade');
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
        Schema::dropIfExists('fisico_quimicas');
    }
}

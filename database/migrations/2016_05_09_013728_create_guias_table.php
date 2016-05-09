<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    Schema::create('guias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ans');
            $table->string('guia');
            $table->string('solicitante');
            $table->string('codigo_operadora');
            $table->date('data_autorizacao');
            $table->integer('id_patient');
            $table->float('valor');
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
        Schema::drop('guias');
    }
}

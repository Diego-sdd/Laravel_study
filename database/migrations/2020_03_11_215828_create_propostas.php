<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropostas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propostas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nm_cliente');
            $table->string('ds_endereco');
            $table->string('vl_total');
            $table->string('vl_sinal');
            $table->string('qt_parcelas');
            $table->string('vl_parcelas');
            $table->string('dt_inicio_pagamento');
            $table->string('dt_proposta');
            $table->string('ds_status');
            $table->string('ds_arquivo');
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('cliente');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propostas');
    }
}

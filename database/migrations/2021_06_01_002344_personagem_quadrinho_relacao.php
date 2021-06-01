<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonagemQuadrinhoRelacao extends Migration
{
    public function up()
    {
        Schema::table("personagems_quadrinhos", function (Blueprint $table) {
            $table->foreign('personagem_id')->references('id')->on('personagems');
            $table->foreign('quadrinho_id')->references('id')->on('quadrinhos');
        });
    }

    public function down()
    {
        //
    }
}


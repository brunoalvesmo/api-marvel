<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonagemsQuadrinhos extends Migration
{
    public function up()
    {
        Schema::create('personagems_quadrinhos', function (Blueprint $table) {
            $table->integer('personagem_id', false);
            $table->integer('quadrinho_id', false);
            $table->primary(['personagem_id', 'quadrinho_id']);            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personagems_quadrinhos');
    }
}

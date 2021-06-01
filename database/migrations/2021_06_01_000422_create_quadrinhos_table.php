<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuadrinhosTable extends Migration
{
    public function up()
    {
        Schema::create('quadrinhos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('titulo', 100);
            $table->string('descricao', 200);
            $table->integer('ano');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('quadrinhos');
    }
}

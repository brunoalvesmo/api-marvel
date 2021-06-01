<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonagemsTable extends Migration
{
    public function up()
    {
        Schema::create('personagems', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nome', 100);
            $table->string('poder', 100);
            $table->string('descricao', 200);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personagems');
    }
}

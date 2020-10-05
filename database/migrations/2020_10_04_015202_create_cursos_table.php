<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{

    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_curso');
            $table->string('num_carga_horaria');
        });
    }


    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}

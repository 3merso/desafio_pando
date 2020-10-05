<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlunoCurso extends Migration
{

    public function up()
    {
        Schema::create('aluno_curso', function (Blueprint $table) {
            $table->integer('curso_id')->unsigned();
            $table->integer('aluno_id')->unsigned();

            $table->foreign('curso_id')
                  ->references('id')
                  ->on('cursos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('aluno_curso');
    }
}

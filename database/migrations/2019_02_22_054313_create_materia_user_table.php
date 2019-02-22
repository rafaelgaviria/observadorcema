<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('materia_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('course_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('materia_id')->references('id')->on('materias');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('course_id')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materia_user');
    }
}

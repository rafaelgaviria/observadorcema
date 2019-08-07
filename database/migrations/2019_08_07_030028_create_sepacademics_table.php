<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSepacademicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sepacademics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->integer('materia_id')->unsigned();
            $table->integer('creator_id')->unsigned();
            $table->integer('cp_01')->unsigned()->nullable();
            $table->integer('cp_02')->unsigned()->nullable();
            $table->integer('cp_03')->unsigned()->nullable();
            $table->integer('cp_04')->unsigned()->nullable();
            $table->integer('cp_05')->unsigned()->nullable();
            $table->integer('cp_06')->unsigned()->nullable();
            $table->integer('cp_07')->unsigned()->nullable();
            $table->integer('cp_08')->unsigned()->nullable();
            $table->integer('cp_09')->unsigned()->nullable();
            $table->integer('cp_10')->unsigned()->nullable();
            $table->integer('cp_11')->unsigned()->nullable();
            $table->integer('cp_12')->unsigned()->nullable();
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
        Schema::dropIfExists('sepacademics');
    }
}

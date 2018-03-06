<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                  ->references('id')->on('users');
            $table->integer('course_id')->unsigned();
            $table->integer('rol_id')->unsigned();
            $table->integer('creator_id')->unsigned();
            $table->integer('observer_type_id')->unsigned();
            $table->integer('observer_scene_id')->unsigned();
            $table->integer('observer_category_id')->unsigned();
            $table->integer('observer_note_id')->unsigned();
            $table->integer('observer_code_id')->unsigned();
            $table->string('observation', 1500);
            $table->string('state');

            $table->timestamps();
        });

        // Schema::table('observations', function ($table) {
        //     $table->foreign('user_id')->references('id')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('observations');
    }
}

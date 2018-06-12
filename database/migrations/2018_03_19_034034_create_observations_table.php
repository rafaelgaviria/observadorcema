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
            
            // INFO DE QUIEN RECIBE LA OBSERVACIÓN
            $table->integer('user_id')->unsigned();
                //$table->foreign('user_id')->references('id')->on('users');
            
            $table->integer('course_id')->unsigned();
            //$table->foreign('course_id')->references('course_id')->on('users');
            
            //$table->integer('user_role_id')->unsigned();
                //$table->foreign('user_role_id')->references('role_id')->on('users');
            
            // DATOS DE QUIEN REGISTRA LA OBSERVACIÓN
            $table->integer('creator_id')->unsigned();
                //$table->foreign('creator_id')->references('id')->on('users');
            
            $table->integer('creatorrole_id')->unsigned();
                //$table->foreign('creator_role')->references('role_id')->on('users');
            
            
            // DATOS DE LA OBSERVACIÓN
            $table->integer('observer_category_id')->unsigned();
                //$table->foreign('observer_category_id')->references('id')->on('observercategories');  

            $table->integer('observer_code_id')->unsigned();
                //$table->foreign('observer_code_id')->references('id')->on('observercodes');  
            
            $table->integer('observer_scene_id')->unsigned();
                //$table->foreign('observer_scene_id')->references('id')->on('observerscenes');

            $table->integer('observer_type_id')->unsigned();
                //$table->foreign('observer_type_id')->references('id')->on('observertypes');
            
            $table->integer('observer_note_id')->unsigned();
                //$table->foreign('observer_note_id')->references('id')->on('observernotes');  
            
            $table->string('observation', 1500);
            
            $table->boolean('state')->default(1);
            
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

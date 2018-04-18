<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');            
            
            // INFORMACIÓN DE LOGUIN
            $table->string('name', 50);
            $table->string('username', 50);
            $table->string('email', 50)->unique();
            $table->string('password');
            
            // Datos adicionales del usuario
            $table->string('phonenumber', 30)->nullable();
            
            $table->string('document', 15);
            $table->integer('documenttype_id')->unsigned()->nullable();
                $table->foreign('documenttype_id')->references('id')->on('documenttypes');
            
            $table->string('officialcode', 12)->nullable();
            
            $table->integer('course')->unsigned()->nullable();
                $table->foreign('course')->references('id')->on('courses');
            
            $table->integer('role_id')->unsigned()->nullable();
                $table->foreign('role_id')->references('id')->on('roles');
           
            $table->string('file', 128)->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

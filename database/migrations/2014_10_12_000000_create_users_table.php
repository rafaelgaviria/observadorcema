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
            
            $table->string('name');
            $table->string('email', 128)->unique();
            $table->string('password');
            //$table->integer('document', 12);
            // $table->string('document_type', 6);
            // $table->integer('code_school', 12)->nullable();;
            // $table->string('status_id', 5);
            // $table->integer('rol_id', 2)->unsigned();
            // $table->string('file', 128)->nullable();
            $table->rememberToken();
            $table->timestamps();
            
            //Relations
            //$table->foreign('rol_id')->references('id')->on('roles'); 
            //$table->foreign('status_id')->references('id')->on('statuses');
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

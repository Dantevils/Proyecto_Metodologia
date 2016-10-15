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
    /*php artisan make:migration add_nombre_table --create=users*/
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unique();/*identificador unico para enlazar con las tablas.*/
            $table->string('rut');/*String para el rut*/
            $table->string('tipo'); /*Bodegero,Cliente,Vendedor*/
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

           // $table->primary('id');//
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}

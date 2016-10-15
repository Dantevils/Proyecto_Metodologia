<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHeramientaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heramientas', function (Blueprint $table) {
            $table->increments('id')->unique();/*Codigo valor unico para la tabla de heramienta*/
            $table->string('marca');/*marca del material*/
            $table->string('descripcion');/*Estado, detalles de la herramienta*/
            $table->integer('stock');/*stock del total de heramienta de este tipo*/
            $table->timestamps();
           
           // $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heramientas');
    }
}

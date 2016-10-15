<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiales', function (Blueprint $table) {
            $table->increments('id')->unique();/*Codigo unico*/
            $table->string('nombre');
            $table->string('proveedor');/*Nombre del proveedor del material*/
            $table->float('stock_inicial');/*flotante para los stock de materiales */
            $table->float('stock_minimo');/*stock minimo de los materiales*/

            $table->integer('tar_id')->unsigned();/*para las tablas de foraneas*/
            //$table->primary('id');
            
           //  $table->foreign('tar_id')->references('id')->on('tareas')->onDelete('cascade');/*referencias para los valores*/

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
        Schema::dropIfExists('materiales');
    }
}

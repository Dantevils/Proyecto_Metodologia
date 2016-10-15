<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTareaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('nombre');/*nombre actividad*/


            $table->integer('doc_id')->unsigned();/*para las tablas de foraneas*/
            $table->timestamps();
          //  $table->primary('id');//
            
         //  $table->foreign('doc_id')->references('id')->on('documentos')->onDelete('cascade');/*referencias para los valores*/
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tareas');
    }
}

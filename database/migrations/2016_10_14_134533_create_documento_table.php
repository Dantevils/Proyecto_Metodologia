<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->increments('id')->unique();
            
            $table->string('tipo');/*Contrato o presupuesto*/
            $table->date('fechaini');/*Fecha de inicio*/
            $table->date('fechafin');/*Fecha de termino*/
            $table->string('total');/*Total de valor de actividades, con algun procedimiento almacenado retronamos esto*/
            $table->integer('user_id')->unsigned();/*para las tablas de foraneas*/
           
            //$table->primary('doc_id');//
           
          //  $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');/*referencias para los valores*/

            /*faltan las relaciones has many to */

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
        Schema::dropIfExists('Documentos');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    /*Modelo de la tabla de documento*/
    protected $table = 'documentos';
    protected $primaryKey='id';/*Declaracion de clave primaria*/
    protected $fillable = ['id','tipo','fechaini','total'];/*variables de la relacion de datos*/

    /*relaciones has many*/
    /*
     * prumary keys declarar gere
     */
    
    /*

     * php artisan tinker

     */

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
    protected $table = 'heramientas';
    protected $primaryKey='id';/*Declaracion de clave primaria*/
    protected $fillable = ['id','marca','descripcion','stock'];/*variables de la relacion de datos*/

}

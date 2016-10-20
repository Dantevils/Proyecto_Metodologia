<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    //
    protected $table = 'tareas';
    protected $primaryKey='id';/*Declaracion de clave primaria*/
    protected $fillable = ['id','nombre'];/*variables de la relacion de datos*/
    

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    protected $table = 'proveedores';
    protected $primaryKey='id';/*Declaracion de clave primaria*/
    protected $fillable = ['id','nombre','fono','email','detalle'];/*variables de la relacion de datos*/

}

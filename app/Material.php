<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //
    protected $table = 'materiales';
    protected $primaryKey='id';/*Declaracion de clave primaria*/
    protected $fillable = ['id','nombre','proveedor','stock_inicial','stock_minimo'];/*variables de la relacion de datos*/

}

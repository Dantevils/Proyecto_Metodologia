<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey='id';
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*Relaciones*/

    /*Un contrato a usuario 1-1 */
    public function contrato()
    {
        return $this->hasOne('App\user','id','id');
    }

    /*Un usuario a contrato 1-n*/
    public function insumos()
    {
        return $this->hasMany('App\Documentos','id','id');
    }

}

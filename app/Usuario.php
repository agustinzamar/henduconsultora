<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table = 'usuario';
    public $timestamps = false;

    protected $fillable = [
        'username', 'password', 'nombre', 'apellido', 
    ];

    protected $hidden = [
        'password'
    ];

    public function getImgAttribute($value){
        return 'storage/usuarios/'.$value;
    }

    public function getAuthPassword()
    {
      return $this->password;
    }

    public function publicaciones(){
        return $this->hasMany("App\Novedad", "id_autor", "id");
    }
}

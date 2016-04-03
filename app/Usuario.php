<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {

    protected $table = 'usuario';
    protected $primaryKey = 'idusuario';

    public function roles() {
        return $this->hasOne('App\Rol', 'idrol');
    }

    public function getUsuarioByClave($clave) {
        return Usuario::where('clave', '=', $clave)->get()->first()->toArray();
    }

}

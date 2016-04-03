<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use App\Http\Requests;


use App\Usuario as Usuario;

class Usuario_controller extends Controller {

    public function Authentication() {

        $clave = request()->input('clave');
        $usuario_model = new Usuario;

        $session = $usuario_model->getUsuarioByClave($clave);

        if (!$session) {
            return redirect()->to('login');
        } else {
            session(['usuario' => $session]);
            return redirect()->to('menu');
        }
    }

}

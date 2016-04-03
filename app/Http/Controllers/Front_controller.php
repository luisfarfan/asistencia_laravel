<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Menu_pattern as Menu_pattern;
use App\Menu_child as Menu_child;

class Front_controller extends Controller {

    public function armarMenu() {
        $session = session()->get('usuario');
        $idrol = $session['idrol'];
        $menu_pattern = Menu_pattern::whereIn('idrol', [$idrol, 3])->get()->toArray();
        $menu_child = Menu_child::all()->toArray();

        foreach ($menu_pattern as $key => $value) {

            foreach ($menu_child as $row => $valor) {
                $valor['idmenu_pattern'] == $value['idmenu_pattern'] ? $menu_pattern[$key]['hijos'][] = $valor : '';
            }
        }

        return view('index', ['menu' => $menu_pattern, 'usuario' => $session]);
    }

}

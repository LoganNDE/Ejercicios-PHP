<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formularioController extends Controller
{
    public function procesarInfo(Request $request) {
        $nombre = $request['name'];
        $apellidos = $request['lastname'];
        $websiteURL = $request['websiteURL'];
        $email = $request['email'];
        $numberMembers = $request['numberMembers'];
        $gender = isset($request['gender']) ? $request['gender'] : "N/A";
        $aficiones = isset($request['aficiones']) ? $request['aficiones'] : [];
        $menu = isset($request['favoriteMenu']) ? $request['favoriteMenu'] : [];


        return view('unidad3/formulario/formulario-view', compact('nombre', 'apellidos', 'websiteURL', 'email', 'numberMembers', 'gender', 'aficiones', 'menu'));
    }
}

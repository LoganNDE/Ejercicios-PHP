<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function loginCheck(Request $request){
        $user = isset($request['user']) ? $request['user'] : '';
        $password = isset($request['password']) ? $request['password'] : '';

        $userLogin = ["User" => "admin", "Password" => "1234"];
        
        if (empty($user) || empty($password)) {
            return view("index");
        } else {
            if ($user == $userLogin['User'] && $password == $userLogin['Password']) {
                return view("unidad3/login/ok");
            } else {
                return view("unidad3/login/ko");
            }
        }
    }


    public function loginGET(){
        return view("unidad3/login");
    }
}

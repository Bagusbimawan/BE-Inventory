<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function IndexLogin(){
        $login = Login::all();
        return response()->json([
            "data"=>$login
        ]);
    }

    function StoreLogin(Request $request){
        $login = Login::create([
            "username"=>$request->username,
            "password"=>$request->password
        ]);
        return response()->json([
            "data"=>$login
        ]);
    }
}

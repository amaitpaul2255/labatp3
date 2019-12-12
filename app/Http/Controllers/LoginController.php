<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function verify(Request $req)
    {
        //echo $req->name;
        if($req->name == $req->password)
        {
            $req->session()->put('x',$req->name);
            return redirect('/home');
        }
        else{
            echo "Invalide User!!!!";
        }
    }
}

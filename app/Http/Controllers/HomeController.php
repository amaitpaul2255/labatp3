<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(Request $req)
    {

        $nm = session('x');
    	$id ="1111-1111";
    	$cgpa = "222";

    	if($req->session()->has('x')){
    		return view('home.index', compact('nm', 'id', 'cgpa'));
    	}else{
    		return redirect('/login');
    	}
    }
}

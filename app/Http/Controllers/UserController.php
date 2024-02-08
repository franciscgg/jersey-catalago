<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }
   

    public function login(Request $request){
        $email = $request->email;



        if(Auth::attempt(['email' => $request->email, 'password' => $request-> password])){

            return view('logado');
        }else{
            return view('index')->with('email', $email);
        }
    }
}   
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class controlador extends Controller
{
    //
    public function eli () {
        return view('elisabeth');
    }

    public function fri () {
        return view('fridakhalo');
    }

    public function leo () {
        return view('Leo');
    }

    public function pic () {
        return view('picasso');
    }

    public function van () {
        return view('vangogh');
    }

    public function welcome () {
        return view('welcome');
    }

    public function login () {
        return view('admon.login');
    }

    public function validarlogin (Request $request) {
        $user=$request->input('user');
        $pass=$request->input('password');
        $key=Hash::make ($request->input('key'));

        if ($user === 'jalempuje'){
            $url='admon.dashboard';
        }else{
            $url='admon.login';
        }
        return view($url,[
            'user'=>$request->input('user'),
            'key'=>$key
        ]);
    }



}

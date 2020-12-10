<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= DB::table('usuarios')
        ->orderBy('Usuario')
        ->get();

        return view ('Crud.showUsuarios', [
            'usuarios'=> $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Crud.altaUsuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=DB::table('usuarios')
        ->insert([
            'Usuario'=>$request->input('usuario'),
            'password'=>$request->input('clave'),
            'key'=>$request->input('llave')
        ]);
        return redirect()->action('Crud@index')
        ->with('status', 'Usuario Eliminado Exitosamente');
    }


    public function show($id)
    {
        $user=DB::table('usuarios')
        ->where('idUsuario','=', $id)
        ->first();
        return view ('Crud.altaUsuario', ['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request)
    {
        $user = DB::table('usuarios')
        ->where('idUsuario', '=',  $request->input('id'))
        ->update([
            'Usuario' => $request->input('usuario'),
            'password' => $request->input('clave'),
            'key' => $request->input('llave')
        ]);

        return redirect()->action('Crud@index')
            ->with('status','Usuario Modificado Exitosamente');
    }

    
    public function destroy($id)
    {
        $user=DB::table('usuarios')
        ->where('idUsuario', '=', $id)
        ->delete();

        return redirect()->action('Crud@index')
        ->with('status', 'Usuario Eliminado Exitosamente');
    
    }
}

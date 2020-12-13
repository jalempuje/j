<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class poetscircle extends Controller
{
   
    public function index()
    {
     
        $poets= DB::table('poets')
        ->orderBy('first_name')
        ->get();

        return view ('Crud.Poets', [
            'poets'=> $poets
        ]);

      
    }

   
    public function create()
    {
        return view('Crud.altapoet');
    }

    
    public function store(Request $request)
    {
        $user=DB::table('poets')
        ->insert([
            'poet_code'=>$request->input('Code'),
            'first_name'=>$request->input('First name'),
            'surname'=>$request->input('Surname'),
            'address'=>$request->input('Address'),
            'postcode'=>$request->input('Postcode'),
            'telephone_number'=>$request->input('Telephone number')
        ]);
        return redirect()->action('poetscircle@index')
        ->with('status', 'Poeta Insertado Exitosamente');
    }

   
    public function show($id)
    {
        $user=DB::table('poets')
        ->where('poet_code','=', $id)
        ->first();
        return view ('Crud.altapoet', ['poets'=>$poets]);
    }

  
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request)
    {
        $user = DB::table('poets')
        ->where('poet_code', '=',  $request->input('Code'))
        ->update([
            'poet_code'=>$request->input('Code'),
            'first_name'=>$request->input('First name'),
            'surname'=>$request->input('Surname'),
            'address'=>$request->input('Address'),
            'postcode'=>$request->input('Postcode'),
            'telephone_number'=>$request->input('Telephone number')
        ]);

        return redirect()->action('poetscircle@index')
            ->with('status','Poeta Modificado Exitosamente');
    }

  
    public function destroy($id)
    {
        $user=DB::table('poets')
        ->where('poet_code', '=', $id)
        ->delete();

        return redirect()->action('poetscircle@index')
        ->with('status', 'Poeta Eliminado Exitosamente');
    }
}

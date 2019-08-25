<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Novedad;

class NovedadesController extends Controller
{
    
    public function index(){

        $novedades = Novedad::with('autor')->get();

        return view('novedades.index')->with([
            'novedades' => $novedades
        ]);

    }

    public function show($id){

        $novedad = Novedad::with('autor')->find($id);

        if($novedad){
            return view('novedades.show')->with([
                'novedad' => $novedad
            ]);
        }

        return abort(404);
    }

    public function write(){
        return view('novedades.write');
    }

    public function edit($id){
        $novedad = Novedad::find($id);

        if($novedad){
            return view('novedades.edit')->with([
                'novedad' => $novedad
            ]);
        }

        return abort(404);
    }

}

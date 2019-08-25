<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Novedad;

class NovedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $novedades = Novedad::with('autor')->get();

        return response($novedades, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try{

            $novedad = new Novedad();
            $novedad->titulo = $request->input('titulo');
            $novedad->cuerpo = $request->input('cuerpo');
            $novedad->fecha = Carbon::now();
            $novedad->id_autor = $request->input('autor');
            $novedad->descripcion = $request->input('descripcion');
            
            $image = $request->file('imagen');

            if($image){               
                $path = Storage::disk('public')->put('novedades/', $image);
                $novedad->img_preview = basename($path);
            }else{
                $novedad->img_preview = '';
            }

            $novedad->save();

            return response($novedad, 201);

        }catch(Exception $ex){

            return response($ex, 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $novedad = Novedad::find($id);

        if($novedad){

            try{

                $novedad->delete();

                return response('', 204);

            }catch(Exception $ex){
                return response($ex, 500);
            }

        }else{
            return response('Resource not found.', 404);
        }
    }
}

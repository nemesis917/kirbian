<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Catalogo;
use App\Imagen_jeroglifico;


class catalogoController extends Controller
{

    public function index()
    {
        //consulto el listado de los gardiner
        $cat = Catalogo::select("id", "nombres")->get();

        //envio la captura a la vista
        return view("sistemas.catalogo.index")->with('catalogo', $cat);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }


    public function jq_gardiner(Request $request){
        $datos = DB::table('vw_catalogo_jeroglifico')->where('catalogo_id', $request->id)->get();
        return response()->json($datos);
    }

    public function jq_consultar(Request $request){
        $datos = DB::table('vw_ver_jeroglifico')->where('id', $request->id)->get();
        $imagenes = Imagen_jeroglifico::select('ruta_imagen', 'referencia')->where('jeroglifico_id', $datos[0]->id)->get();

        return response()->json([$datos, $imagenes]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Catalogo;


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
        dd($request->id);
    }

}
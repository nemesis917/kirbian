<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jeroglifico;
use App\Descripcion;
use Image;

class jeroglificoController extends Controller
{

    public function index()
    {

    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        //Se inicia por instanciar los archivos
        $jero = new jeroglifico();

        //Se ingresan los valores capturados en los contenedores de jeroglifico
        $jero->gandiner = $request->gardiner;
        $jero->transliteracion = $request->transliteracion;
        $jero->sentido = $request->sentido;
        $jero->nombre_usuario = \Auth::user()->name . " " . \Auth::user()->lastname;
        $jero->catalogo_id = $request->seleccion;
        //Se guardan los valores en la tabla jeroglifico
        $dir = $jero->save();
        
        //Si se ha colocado algun dato en el campo descripcion
        if ($request->descripcion) {
            //carga la informacion de la descripcion
            $jero->descripciones()->create(['descripcion' => $request->descripcion]);
        }

        //Si se ha ingresado la primera imagen
        if ($request->file('imagen1')) {
            //Se define una variable para abreviar
            $image = $request->file('imagen1'); 
            //Anexamos el id para la carpeta
            $idCatalogo = $jero->catalogo_id;
            //Definimos el tamaño de la imagen
            $size1 = "300";
            $size2 = "300";
            //tomamos la extension de la imagen y nos aseguramos que es permitida
            $extension = $image->getClientOriginalExtension();
            //creamos un nombre
            $imgName = rand(1,999)."-".$request->gardiner."-".$idCatalogo."-".rand(1,999).".".$extension;


            $nombreGuardado = $this->guardarImagenResize($image, $size1, $size2, $imgName, $idCatalogo, $extension);


            //carga la primera imagen en la tabla imagen_jeroglifico
            $jero->imagenes_jeroglificos()->create(
                [
                'ruta_imagen' => $nombreGuardado,
                'referencia' => 'img_jero1'               
                ]);
        }
        
    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }

    public function guardarImagenResize($image,  $size1, $size2, $imgName,$idCatalogo, $extension){


        if ($extension == "png" || $extension == "jpg") {
            //creamos la ruta;
            $rutaImg = 'imagenes/catalogo/' . $idCatalogo;
            //Si no existe la carpeta, la crea
            if (!file_exists($rutaImg)) {
                mkdir($rutaImg, 0644, true);
            }
            //Redefinimos el tamaño y guardamos la imagen modificada en la carpeta
            Image::make($image)->resize($size1,$size2)->save($rutaImg . "/" . $imgName);

            return $rutaImg . "/" . $imgName;
        } else {
            dd("Este tipo de archivo no esta permitido");
        }

    }


}

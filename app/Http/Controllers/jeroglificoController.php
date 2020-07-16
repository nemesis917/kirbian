<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Jeroglifico;
use App\Descripcion;
use App\Imagen_jeroglifico;
use App\Catalogo;
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

            //Anexamos el id para la carpeta
            $idCatalogo = $jero->catalogo_id;
            //Se define una variable para abreviar
            $image = $request->file('imagen1'); 

            $nombreGuardado = $this->guardarImagenResize($image, $idCatalogo);


            //carga la primera imagen en la tabla imagen_jeroglifico
            $jero->imagenes_jeroglificos()->create(
                [
                'ruta_imagen' => $nombreGuardado,
                'referencia' => '1'               
                ]);
        } else {
            //De no tener imagen guarda una ruta pre-establecida
            $jero->imagenes_jeroglificos()->create(
                [
                'ruta_imagen' => "system/no-foto.jpg",
                'referencia' => '1'               
                ]);
        }

        //Si se ha ingresado la primera imagen
        if ($request->file('imagen2')) {

            //Anexamos el id para la carpeta
            $idCatalogo = $jero->catalogo_id;
            //Se define una variable para abreviar
            $image = $request->file('imagen2'); 

            $nombreGuardado = $this->guardarImagenResize($image, $idCatalogo);


            //carga la primera imagen en la tabla imagen_jeroglifico
            $jero->imagenes_jeroglificos()->create(
                [
                'ruta_imagen' => $nombreGuardado,
                'referencia' => '2'               
                ]);
        } else {
            //De no tener imagen guarda una ruta pre-establecida
            $jero->imagenes_jeroglificos()->create(
                [
                'ruta_imagen' => "system/no-foto.jpg",
                'referencia' => '2'               
                ]);
        }

        //Si se ha ingresado la primera imagen
        if ($request->file('imagen3')) {

            //Anexamos el id para la carpeta
            $idCatalogo = $jero->catalogo_id;
            //Se define una variable para abreviar
            $image = $request->file('imagen3'); 

            $nombreGuardado = $this->guardarImagenResize($image, $idCatalogo);


            //carga la primera imagen en la tabla imagen_jeroglifico
            $jero->imagenes_jeroglificos()->create(
                [
                'ruta_imagen' => $nombreGuardado,
                'referencia' => '3'               
                ]);
        } else {
            //De no tener imagen guarda una ruta pre-establecida
            $jero->imagenes_jeroglificos()->create(
                [
                'ruta_imagen' => "system/no-foto.jpg",
                'referencia' => '3'               
                ]);
        }

        return redirect()->route('sistema.catalogo.index')->with('message', "solicitud procesada");

    }

    public function show()
    {

    }

    public function edit(Request $request)
    {
        $datos = DB::table('vw_ver_jeroglifico')->where('id', $request->id)->get();
        $imagenes = Imagen_jeroglifico::where('jeroglifico_id', $datos[0]->id)->get();
        $catalogo = Catalogo::select('id', 'nombres')->get();

        return response()->json([$datos, $imagenes, $catalogo]);
    }

    public function update(Request $request)
    {
        $jero = Jeroglifico::find($request->id);

        $jero->gandiner = $request->gandiner;
        $jero->transliteracion = $request->transliteracion;
        $jero->sentido = $request->significado;
        $jero->nombre_usuario = \Auth::user()->name ." ". \Auth::user()->lastname;
        $jero->catalogo_id = $request->seleccion;

        $update = $jero->update();

        if($update == true && !empty($request->descripcion)){
            $jero->descripciones()->update(
                [
                'descripcion' => $request->descripcion
                ]);
        }
        return redirect()->route('sistema.catalogo.index')->with('message', "solicitud procesada");
    }

    public function destroy()
    {

    }

    public function guardarImagenResize($image, $idCatalogo){

            //tomamos la extension de la imagen y nos aseguramos que es permitida
            $extension = $image->getClientOriginalExtension();
            //creamos un nombre
            $imgName = rand(1,999)."-jero-".$idCatalogo."-".rand(1,999).".".$extension;
        if ($extension == "png" || $extension == "jpg") {
            //creamos la ruta;
            $rutaImg = 'imagenes/catalogo/' . $idCatalogo;
            //Si no existe la carpeta, la crea
            if (!file_exists($rutaImg)) {
                mkdir($rutaImg, 0644, true);
            }

            //Estoy metiendo en un listado las caracteristicas de la imagen (Alto y ancho)
            list($ancho, $alto, $tipo, $atributos) = getimagesize($image);

            //Redefinimos el tamaño y guardamos la imagen modificada en la carpeta segun la posicion de la imagen
            if($ancho > $alto){
                $file = Image::make($image)->resize(460, 340)->save($rutaImg . "/" . $imgName);
            }elseif($ancho < $alto){
                $file = Image::make($image)->resize(340, 460)->save($rutaImg . "/" . $imgName);
            }elseif($ancho == $alto){
                $file = Image::make($image)->resize(340, 340)->save($rutaImg . "/" . $imgName);
            }


            return $rutaImg . "/" . $imgName;
        } else {
            dd("Este tipo de archivo no esta permitido");
        }

    }

    public function jq_consultar(Request $request){
        $datos = DB::table('vw_ver_jeroglifico')->where('id', $request->id)->get();
        $imagenes = Imagen_jeroglifico::where('jeroglifico_id', $datos[0]->id)->get();
        $array = [$datos, $imagenes];
        return response()->json($array);
    }

}

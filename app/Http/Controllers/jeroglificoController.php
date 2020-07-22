<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Jeroglifico;
use App\Descripcion;
use App\Imagen_jeroglifico;
use App\Comentario_jero;
use App\Imagen_comentario_jero;
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

        $validatedData = $request->validate([
            'imagen1' => 'required|file|image|mimes:png,jpg,jpeg,gif,svg,webp|max:5000',
            'imagen2' => 'file|image|mimes:png,jpg,jpeg,gif,svg,webp|max:5000',
            'imagen3' => 'file|image|mimes:png,jpg,jpeg,gif,svg,webp|max:5000',
            'gardiner' => 'required|max:12',
            'transliteracion' => 'required|max:30',
            'seleccion' => 'required',
            'sentido' => 'required|max:1200',
            'comentario' => 'max:1200',
            'descripcion'  => 'max:1200'
        ]);


        $jero = new jeroglifico();

        //Se ingresan los valores capturados en los contenedores de jeroglifico
        $jero->gandiner = $request->gardiner;
        $jero->transliteracion = $request->transliteracion;
        $jero->sentido = $request->sentido;
        $jero->nombre_usuario = \Auth::user()->name . " " . \Auth::user()->lastname;
        $jero->catalogo_id = $request->seleccion;
        $jero->comentario = $request->comentario;
        $jero->visibilidad = 1;
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

    public function mostrarFuentes()
    {
        return view('sistemas.catalogo.mostrarFuentes');
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

        $validatedData = $request->validate([
            'imagen0' => 'file|image|mimes:png,jpg,jpeg,gif,svg,webp|max:5000',
            'imagen1' => 'file|image|mimes:png,jpg,jpeg,gif,svg,webp|max:5000',
            'imagen2' => 'file|image|mimes:png,jpg,jpeg,gif,svg,webp|max:5000',
            'gandiner' => 'required|max:12',
            'transliteracion' => 'required|max:30',
            'significado' => 'required|max:1300',
            'comentario' => 'required|max:1300',
            'descripcion' => 'required|max:1300'
            ]);


        $vw_jero = $datos = DB::table('vw_ver_jeroglifico')->where('id', $request->id)->first();
        
        $jero = Jeroglifico::find($request->id);

        $jero->gandiner = $request->gandiner;
        $jero->transliteracion = $request->transliteracion;
        $jero->sentido = $request->significado;
        $jero->nombre_usuario = \Auth::user()->name ." ". \Auth::user()->lastname;
        $jero->catalogo_id = $request->seleccion;
        $jero->comentario = $request->comentario;

        
        $update = $jero->update();

        if (!empty($request->descripcion)) {
            if($vw_jero->descripcion == null){
                $jero->descripciones()->create(
                    [
                    'descripcion' => $request->descripcion
                    ]
                );
            } else {
                $jero->descripciones()->update(['descripcion' => $request->descripcion]);
            }
        }

        //Carga de imagenes

        if (isset($request->imagen0)) {
            
            //Anexamos el id para la carpeta
            $idCatalogo = $jero->catalogo_id;
            //Se define una variable para abreviar
            $image = $request->imagen0; 

            $nombreGuardado = $this->guardarImagenResize($image, $idCatalogo);

            $imagen = Imagen_jeroglifico::select()->where('referencia','1')->where('jeroglifico_id', $request->id)->first();
            
            $nombreImg = explode('/', $imagen->ruta_imagen);

            //mover el archivo a una papelera
            rename ( $imagen->ruta_imagen, "imagenes/basurero/" . $nombreImg[3]);

            $imagen->ruta_imagen = $nombreGuardado;
            $imagen->update();
        } 

            //editar
        if (isset($request->imagen1)) {
            
            //Anexamos el id para la carpeta
            $idCatalogo = $jero->catalogo_id;
            //Se define una variable para abreviar
            $image = $request->imagen1; 

            $nombreGuardado = $this->guardarImagenResize($image, $idCatalogo);

            $imagen = Imagen_jeroglifico::select()->where('referencia','2')->where('jeroglifico_id', $request->id)->first();
            
            $nombreImg = explode('/', $imagen->ruta_imagen);
            $cant = sizeof($nombreImg);
            
            if ($cant == 4) {
                //mover el archivo a una papelera
                rename ( $imagen->ruta_imagen, "imagenes/basurero/" . $nombreImg[3]);
            } else {

            }

            $imagen->ruta_imagen = $nombreGuardado;
            $imagen->update();
        } 

        if (isset($request->imagen2)) {
            
            //Anexamos el id para la carpeta
            $idCatalogo = $jero->catalogo_id;
            //Se define una variable para abreviar
            $image = $request->imagen2; 

            $nombreGuardado = $this->guardarImagenResize($image, $idCatalogo);

            $imagen = Imagen_jeroglifico::select()->where('referencia','3')->where('jeroglifico_id', $request->id)->first();
            
            $nombreImg = explode('/', $imagen->ruta_imagen);
            $cant = sizeof($nombreImg);

            if ($cant == 4) {
                //mover el archivo a una papelera
                rename ( $imagen->ruta_imagen, "imagenes/basurero/" . $nombreImg[3]);
            }

            $imagen->ruta_imagen = $nombreGuardado;
            $imagen->update();
        } 

        if($update){
            return redirect()->route('sistema.catalogo.index')->with('message', "solicitud procesada");
        } else {
            return redirect()->route('sistema.catalogo.index')->with('error', "Hubo un error");
        }
    }

    public function manejoComentario($id)
    {
        $jero = DB::table('vw_ver_jeroglifico')->where('id', $id)->first();
        $img = Imagen_jeroglifico::where('jeroglifico_id', $id)->whereIn('referencia', [1,2,3])->get();
        $coment = DB::table('vw_ver_comentarios')->where('jeroglificos_id', $id)->orderBy('id', 'DESC')->get();
        $fuentes = DB::table('vw_ver_img_paleografica')->where('jeroglificos_id', $jero->id)->orderBy('id', 'DESC')->get();

        return view('sistemas.catalogo.comentario')->with('jero', $jero)->with('imagen', $img)->with('coment', $coment)->with('fuentes', $fuentes);
    }

    public function jq_anularFoto(Request $request)
    {
        $im = Imagen_Jeroglifico::find($request->id);
        if ($im->ruta_imagen != "system/no-foto.jpg") {
            $nombreImg = explode('/', $im->ruta_imagen);
            $val = rename ( $im->ruta_imagen, "imagenes/basurero/" . $nombreImg[3] );
            if($val){
                $im->ruta_imagen = "system/no-foto.jpg";
                $im->update();
            }
        }
        return response()->json(true);
    }

    public function jq_consultar(Request $request)
    {
        $datos = DB::table('vw_ver_jeroglifico')->where('id', $request->id)->get();
        $imagenes = Imagen_jeroglifico::where('jeroglifico_id', $datos[0]->id)->get();
        $array = [$datos, $imagenes];
        return response()->json($array);
    }

    public function jq_desactivarJero(Request $request)
    {
        $jero = Jeroglifico::find($request->id);
        $jero->visibilidad = 0;
        $v = $jero->update();
        return response()->json($v);
    }

    public function jq_aprobarComentario(Request $request){

        $jero = Comentario_jero::find($request->id);

        if ($jero->visibilidad == 1) {
            $jero->visibilidad = 0;
        } else {
            $jero->visibilidad = 1;
        }
        
        $valida = $jero->update();
        return response()->json($valida);

    }

    public function jq_eliminarComentario(Request $request){
        $jero = Comentario_jero::find($request->id);
        $valida = $jero->delete();
        return response()->json($valida);
    }
   
    public function jq_cambiarFp(Request $request)
    {
        $imgCom = Imagen_comentario_jero::find($request->id);

        if ($imgCom->visibilidad == 1) {
            $imgCom->visibilidad = 0;
        } else {
            $imgCom->visibilidad = 1;
        }

        $valida = $imgCom->save();

        if ($valida) {
            return response()->json($valida);
        }
    }

    public function jq_borrarFp(Request $request)
    {
        $imgCom = Imagen_comentario_jero::find($request->id);
        $nombreImg = explode('/', $imgCom->ruta_img_jero);
        $elim = rename ( $imgCom->ruta_img_jero, "imagenes/basurero/" . $nombreImg[2]);
        if ($elim) {
            $valida = $imgCom->delete();
        }

        if ($valida) {
            return response()->json($valida);
        }
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



}

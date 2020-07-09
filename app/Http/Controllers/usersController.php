<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class usersController extends Controller
{
    //Metodo del inicio del procedimiento Usuario, se selecciona a los usuarios para eliminar o modificar sus datos
    public function index()
    {
        //Consulta la DB para traerse a todos los usuarios
        $usuarios = User::select("id","name", "lastname", "email", "level")->get();
        //retorna a la vista principal de usuarios con todos los usuarios ya en la vista
        return view('sistemas/usuarios/index')->with('usuarios', $usuarios);
    }


     // Funcion encargada de guardar los datos del usuario
    public function store(Request $request)
    {
        //me aseguro a nivel del back que se respeten las limitantes, cualquier error cancela el proceso
        $request->validate([
            'nombre' => 'required|max:30',
            'apellido' => 'required|max:30',
            'correo' => 'required|max:120',
            'clave1' => 'required|max:120',

        ]);
        //Se instancia una variable que guardara los datos capturados en el modelo
        $usuario = new User();

        //Se inserta cada uno de los datos capturados dentro de los campos de la instancia
        $usuario->name = $request->nombre;
        $usuario->lastname = $request->apellido;
        $usuario->email = $request->correo;
        $usuario->password = bcrypt($request->clave1);
        $usuario->level = $request->nivel;
        $usuario->remember_token = $request->_token;
        
        //Se guarda toda la informacion capturada en la Base de datos User
        // Se pregunta, si lo guardo, redirecciona a la ruta indicada, sino, envia un msj y deten todo
        $guardar = $usuario->save();
        if ($guardar) {
            return redirect()->route('sistema.usuario.index');
        } else {
            dd("Algo salió mal");
        }
    }


    //Metodo para ver los datos del usuario a eliminar
    public function edit($id)
    {
        //Consulto a la base de datos datos especificos
        $usuario = User::select("id", "name", "lastname", "email", "level")->where('id', $id)->get();

        //Retorno el ID que traje de la consulta y la informacion de la variable y la inyecto en la vista 
        return view("sistemas.usuarios.modificar")->with('id', $id)->with('usuarios', $usuario[0]);
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
        //Traer los datos del usuario con este ID
        $usuario = User::find($id);

        //Sustituir el valor por el capturado en el modificar
        $usuario->name = $request->nombre;
        $usuario->lastname = $request->apellido;
        $usuario->email = $request->correo;
        $usuario->level = $request->nivel;
        $usuario->remember_token = $request->_token;

        //Guardar los datos a modificar
        $guardar = $usuario->update();
        if ($guardar) {
            return redirect()->route('sistema.usuario.index');
        } else {
            dd("Algo salió mal");
        }
        
    }

    //Metodo para eliminar un usuario
    public function destroy($id)
    {
        //Si la cuenta a eliminar es de quien tiene la sesion activa, no lo eliminara y retornara al inicio
        if($id == \Auth::user()->id){
            return redirect()->back();
        }

        //Se busca al usuario a eliminar por su ID
        $usuario = User::find($id);
        //Se procede a eliminar
        $eliminar = $usuario->delete();

        //Se valida que se haya eliminado, de ser cierto se regresa al incio, de ser falso arroja un error
        if ($eliminar) {
            return redirect()->route('sistema.usuario.index');
        } else {
            dd("Algo salió mal");
        }
    }

    public function jq_clave(Request $request){
        //id y clave
        $cambio = User::find($request->id);
        $cambio->password = bcrypt($request->clave);

        $valida = $cambio->update();

        return response()->json($valida);
    }
}

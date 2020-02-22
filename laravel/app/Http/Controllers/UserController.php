<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use File;
use App\Category;
use App\User;

class UserController extends Controller
{


    public function config() {
        $categorys = Category::orderBY('id','asc')->get();
    	return view('user.config',[
            'categorys' => $categorys]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function update(Request $request) {

        //Validar usuairo
        $user = \Auth::user();
        $id = $user->id;


        //Validar formulario
    	$validate = $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'nick' => ['required', 'string', 'max:255', 'unique:users,nick,' . $id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $id],
        ]);


        //recoger datos del formulario
        $name = $request->input('name');
    	$surname = $request->input('surname');
    	$nick = $request->input('nick');
    	$phone = $request->input('phone');
    	$email = $request->input('email');

        //asignar nuevos valores al objeto del usuario
        $user->name = $name;
        $user->surname = $surname;
        $user->nick = $nick;
        $user->phone = $phone;
        $user->email = $email;

        //Subir la imagen 
        $image_path = $request->file('image_path');
        if ($image_path) {
            //Poner nombre unico
            $image_path_name = time().$image_path->getClientOriginalName();

            //Guardar en la carpeta storage (storage/app/users)
            Storage::disk('users')->put($image_path_name, File::get($image_path));

            //Seteo el nombre de la imagen en el objeto

            $user->image= $image_path_name;
        }


        //ejecutar consulta y cambios en la base de datos

        $user->update();
        return redirect()->route('config')
                         ->with(['message'=>'Usuario actualizado correctamente']);
        
    }

    public function getImage($filename){
        $file = Storage::disk('users')->get($filename);
        return new response($file, 200);
    }

    public function profile($id){

        $user = User::find($id);
        $categorys = Category::orderBY('id','asc')->get();
        return view('user.profile', 
            ['user' => $user],
            ['categorys' => $categorys] );
    }

    



}


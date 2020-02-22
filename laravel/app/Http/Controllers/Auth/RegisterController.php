<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Category;
use Mail;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        $categorys = Category::orderBY('id','asc')->get();
        return view('auth.register',[
            'categorys' => $categorys]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        User::create([
            'role' => 'user',
            'state' => 'activo',
            'image' => 'image.jpg',
            'name' => $data['name'],
            'surname' => $data['surname'],
            'phone' => $data['phone'],
            'nick' => str_random(6),
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);


        
        /*Mail::send('email.registronuevo',$data , function($message) use ($data){
            $message->from('account@appdeuna.com','Tu cuenta De Una');
            $message->to($data['email'], $data['name'])->subject('Gracias por registrarte');
        });*/

        
        /*Mail::send('email.registroadmin',$data , function($message) use ($data){
            $message->from('account@appdeuna.com','Tu cuenta De Una');
            $message->to('deunapp@gmail.com', $data['email'], $data['name'], $data['phone'])->subject('Nuevo Registro de usuario');
        });*/
         
    }
}

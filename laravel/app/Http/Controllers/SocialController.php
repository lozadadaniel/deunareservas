<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function callback()
    {
        // Obtenemos los datos del usuario
        $social_user = Socialite::driver('facebook')->user(); 
        // Comprobamos si el usuario ya existe
        if ($user = User::where('email', $social_user->email)->first()) { 
            return $this->authAndRedirect($user); // Login y redirección
        } else {  
            // En caso de que no exista creamos un nuevo usuario con sus datos.
            $user = User::create([
                'name' => $social_user->name,
                
                'nick' => str_random(6),
                'role' => 'user',
                'phone' => '00000',
                'state' => '1',
                'email' => $social_user->email,
                'image' => 'image.jpg',
            ]);

 			
            return $this->authAndRedirect($user); // Login y redirección
        }
    }
    // Login y redirección
    public function authAndRedirect($user)
    {
        Auth::login($user);
 
        return redirect()->to('/');
    }
}


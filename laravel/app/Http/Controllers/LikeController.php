<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function like($company_id) {

    	//Recoger datos de la compañia y el usuario

    	$user = \Auth::user();

    	//condicion para ver si ya existe el like y no duplicarlos
    	$isset_like = Like::where('user_id', $user->id)
    	->where('company_id', $company_id)
    	->count();

    	if($isset_like == 0){
    	$like = new Like();
    	$like->user_id = $user->id;
    	$like->company_id = $company_id;

    	//Guardar
    	$like->save();

    	return response() ->json([
    		'like' => $like
    	]);
    } else {
    	return response() ->json([
    		'message' => 'El like ya existe'
    	]);
    }

    	


    }

    public function dislike($company_id) {

    	//Recoger datos de la compañia y el usuario

    	$user = \Auth::user();

    	//condicion para ver si ya existe el like y no duplicarlos
    	$like = Like::where('user_id', $user->id)
    	->where('company_id', $company_id)
    	->first();

    	if($like){
    	

    	//Eliminar like
    	$like->delete();

    	return response() ->json([
    		'like' => $like,
    		'message' => 'has dado dislike correctamente'
    	]);
    } else {
    	return response() ->json([
    		'message' => 'El like no existe'
    	]);
    }

    }
}

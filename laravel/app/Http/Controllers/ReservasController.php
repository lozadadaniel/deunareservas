<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Product;
use Cart;

class reservasController extends Controller
{

	public function __construct(){
		if(!\Session::has('cart')) \Session::put('cart', array());
	}

    //Ver carro
    public function ver(){
    	echo "hola";
	}

    //Añadir item
    public function add(Product $products){

    	$cart = \Session::get('cart');
    	$products->quality = 1;
    	$cart[$products->id] = $products;
		\Session::put('cart',$cart);

		return redirect()->route('ver.reserva');

    }

    //Borrar item

    //Actualizar item

    //Limpiar carrito

    //Total
}

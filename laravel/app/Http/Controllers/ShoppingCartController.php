<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Company;
use App\Destacado;
use App\Product;
use App\User;
use App\Reserva;
use App\Product_reserva;
use App\Mail\Email;
use Cart;
use Illuminate\Support\Carbon;

use Illuminate\Support\Facades\Mail;

class ShoppingCartController extends Controller
{
  
  
    public function insertCart(Request $request)
    {
      //variables
      $cantidad;
      $motivo_reserva = $request->motivo_reserva;
      $num_personas = $request->num_personas;
      $fecha = $request->fecha;
      $hora = $request->hora;
      $decoracion = ($request->decoracion) ? true : false;
      $idCompany = $request->idCompany;
      $acum=0;

      $hora_db = explode(":", $hora);
      $hora_db = $hora_db[0];
      $fecha_db = Carbon::parse($fecha)->format('Y-m-d');
      // dd($fecha_db);
      $reservas = Reserva::all()->where('company_id', '=',$idCompany)->where('dia','=',$fecha_db);
      // dd($reservas->companys->name);
      foreach ($reservas as $reserva) {
        if(!$reserva->companys->uno_x_hora)
        {
          break;
        }
        $producto_reservas = Product_reserva::all()->where('product_id', '=',$request->productos[0])->where('dia','=',$fecha_db);
        // dd($producto_reserva);

        foreach ($producto_reservas as $producto_reserva) {
          $id_producto = $request->productos[0];
          $hora_db_reserva = explode(':',$producto_reserva->hora);
          if($hora_db == $hora_db_reserva[0])
          {
            
            // 'company.profile',[$company->id]
            return \Redirect::route('company.profile',$idCompany)
          ->with('message', 'Esa hora ya esta ocupada favor de seleccionar una diferente');
          }
        }
      }

    	foreach ($request->productos as $producto)
    	{
        $idProducto = $producto;
        $cantidad = $request->cantidad[$acum]; 
        $productoDB = Product::find($idProducto);
        $imagen = ($productoDB->image_path != '') ? $productoDB->image_path : 'sandwich.png';

        Cart::add(array('id' => $idProducto,
                      'name' => $productoDB->nombre,
                      'price' => $productoDB->price,
                      'quantity' => $cantidad,
                      'attributes' => array("motivo_reserva"=>$motivo_reserva,
                                            "num_personas"=>$num_personas,
                                            "fecha"=>$fecha,
                                            "hora"=>$hora,
                                            "decoracion"=>$decoracion,
                                            "idCompany"=>$idCompany,
                                            "imagen"=>$imagen)
                ));
        $acum++;
    	}
      return redirect()->to('ver_carrito');
    }

    public function ver()
    {
      // dd( Cart::getContent());
      $categorys = Category::orderBY('id','asc')->get();
      $companys = Company::orderBY('id','asc')->get();
      $products = Product::orderBY('id','asc')->get();
      $cartCollection = Cart::getContent();
      $itemsCart = $cartCollection->toArray();
      // dd($itemsCart);
      $datos_reserva=array();
      foreach ($itemsCart as $itemCart)
      {
        $id=$itemCart['attributes']['idCompany'];
        $company = Company::find($id);

        array_push($datos_reserva,array("name"=>$company->name,
                                    "id"=>$company->id,
                                    "logo"=>$company->image,
                                    "fecha"=>$itemCart['attributes']['fecha'],
                                    "hora"=>$itemCart['attributes']['hora'],
                                    "num_personas"=>$itemCart['attributes']['num_personas'],
                                    "motivo_reserva"=>$itemCart['attributes']['motivo_reserva']));
        break;
        
      }
      $total_reserva=0;
      foreach ($itemsCart as $itemCart)
      {
        $total_reserva = $total_reserva + ($itemCart['price'] * $itemCart['quantity']);
      }

      return view('shopping_cart.ver',compact('categorys','companys','products','itemsCart','datos_reserva','total_reserva'));
    }

     public function guardar_reserva(Request $request)
     {
      $cartCollection = Cart::getContent();
      $itemsCart = $cartCollection->toArray();
      // dd(($request->all()));
      $Company = Company::find($request->company_id);
      // dd($Company->email);
      $reserva = Reserva::create($request->all());
      foreach ($itemsCart as $itemCart)
      {
        Product_reserva::create([
        'product_id' => $itemCart['id'],
        'reserva_id' => $reserva->id,
        'dia' => $reserva->dia,
        'hora' => $reserva->hora_inicio,
        'cantidad_producto'=>$itemCart['quantity']]);
      }
      
      /*Mail::to($request->correo)->send(new Email($request->all(),$itemsCart,$Company));
      Mail::to($Company->user->email)->send(new Email($request->all(),$itemsCart,$Company));
      Mail::to("deunapp@gmail.com")->send(new Email($request->all(),$itemsCart,$Company));*/

      return redirect('/')->with('message', 'Reserva hecha exitosamente');
     }
}

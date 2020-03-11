<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Company;
use App\Destacado;
use App\Product;
use App\User;


class ControlaInicio extends Controller
{
    
    public function destacados(){
        //Request $request
        //$request->user()->authorizaRoles('user');

    	$categorys = Category::orderBY('id','asc')->get();
    	$companys = Company::orderBY('id','asc')->get();
    	$products = Product::orderBY('id','asc')->get();

        return view('destacados',
        	['categorys' => $categorys],
        	['companys' => $companys],
        	['products' => $products]);
    }

    public function inicio(){

       
    	$categorys = Category::orderBY('id','asc')->get();
    	$destacados = Destacado::orderBY('id','asc')->get(); 

    	

        return view('inicio',
        	['categorys' => $categorys],
        	['destacados' => $destacados] );
    }

    public function terminos(){

       
        $categorys = Category::orderBY('id','asc')->get();
        

        

        return view('terminos',
            ['categorys' => $categorys]);
    }

     public function politicas(){

       
        $categorys = Category::orderBY('id','asc')->get();
        

        

        return view('politicas',
            ['categorys' => $categorys]);
    }

     public function nosotros(){

       
        $categorys = Category::orderBY('id','asc')->get();
        return view('nosotros',
            ['categorys' => $categorys]);
    }
    
    public function maps(){
        $categorys = Category::orderBY('id','asc')->get();
        $companys = Company::orderBY('id','asc')->get();
        

        return view('company.maps',
            ['categorys' => $categorys],
            ['companys' => $companys]
            );
    }
}

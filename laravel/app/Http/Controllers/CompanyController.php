<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use File;
use Cart;
use App\Category;
use App\Company;
use App\City;
use App\Product;

class CompanyController extends Controller
{
    
    
    
    public function getImages($filename){
        $file = Storage::disk('companyavatar')->get($filename);
        return new response($file, 200);
    }
    public function getIcon($filename){
        $file = Storage::disk('companys2')->get($filename);
        return new response($file, 200);
    }

    public function category($name,Request $request){

        $name = str_replace("-", " ", $name);
        $category = Category::where('name' ,$name)->first();
        $categorys = Category::orderBY('id','asc')->get();
        $citys  = City::orderBY('name','asc')->get();
        $idCity = $request->city;
        // dd($citys);
        return view('company.category', compact('category','categorys','citys','idCity','name'));
            // ['category' => $category],
            // ['categorys' => $categorys],
            // ['city'=>$city] );
    }
 
    public function category_city($id,Request $request){

        $category = Category::find($id);
        $categorys = Category::orderBY('id','asc')->get();
        $citys  = City::orderBY('name','asc')->get();
        $idCity = $request->city;
        // dd($citys);
        return view('company.category', compact('category','categorys','citys','idCity', 'id'));
            // ['category' => $category],
            // ['categorys' => $categorys],
            // ['city'=>$city] );
    }
    public function companyProfile($nombre){
        Cart::clear();
        $nombre = str_replace("_", " ", $nombre);
        
        
        $company = Company::where('nick' ,$nombre)->first();
        $categorys = Category::orderBY('id','asc')->get();

        // dd($company);
        return view('company.profile', 
            ['company' => $company],
            ['categorys' => $categorys] );
    } 
    public function companyProfile2($nombre){
        Cart::clear();
        $nombre = str_replace("_", " ", $nombre);
        
        
        $company = Company::where('name' ,$nombre)->first();
        $categorys = Category::orderBY('id','asc')->get();

        // dd($company);
        return view('company.profile', 
            ['company' => $company],
            ['categorys' => $categorys] );
    } 

    public function restaurantes($nombre){
        
        Cart::clear();
        $nombre = str_replace("-", " ", $nombre);
       
        $company = Company::where('nick' ,$nombre)->first();
        $categorys = Category::find(1);
        $categorias = Category::orderBY('id','asc')->get();
        

        return view('company.profile',compact('categorys','categorias','company'));
    }

     public function canchas($no){
        
        Cart::clear();
        $no = str_replace("-", " ", $no);
       
        $company = Company::where('nick' ,$no)->first();
        $categorys = Category::find(2);
        $categorias = Category::orderBY('id','asc')->get();
        

        return view('company.profile',compact('categorys','categorias','company'));
    }


}

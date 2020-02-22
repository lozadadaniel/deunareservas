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

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function getImages($filename){
        $file = Storage::disk('companyavatar')->get($filename);
        return new response($file, 200);
    }
    public function getIcon($filename){
        $file = Storage::disk('companys2')->get($filename);
        return new response($file, 200);
    }

    public function category($id,Request $request){

        $category = Category::find($id);
        $categorys = Category::orderBY('id','asc')->get();
        $citys  = City::orderBY('name','asc')->get();
        $idCity = $request->city;
        // dd($citys);
        return view('company.category', compact('category','categorys','citys','idCity','id'));
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
       
        $company = Company::where('name' ,$nombre)->first();
        $categorys = Category::orderBY('id','asc')->get();
        // dd($company);
        return view('company.profile', 
            ['company' => $company],
            ['categorys' => $categorys] );
    } 
}

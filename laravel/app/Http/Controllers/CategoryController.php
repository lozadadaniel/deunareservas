<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;


class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function category(){
        $companys = Company::all();
    }
}

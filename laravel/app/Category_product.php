<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_product extends Model
{
    //relacion de muchos a uno

	protected $table = 'category_products';


    public function companys(){
    	return $this->belongsTo('App\Company','company_id'); 
    }

    //relacion one to many

    public function products(){
    	return $this->hasMany('App\Product');
    }
}

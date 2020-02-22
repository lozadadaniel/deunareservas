<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $table = 'company';

    //relacion de muchos a uno

    public function category(){
    	return $this->belongsTo('App\Category','category_id');
    }

   //relacion de muchos a uno

    public function city(){
    	return $this->belongsTo('App\City','city_id');
    }

    //relacion de muchos a uno

    public function user(){
    	return $this->belongsTo('App\User','user_id');
    }

    //relacion one to many

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    //relacion one to many

    public function likes(){
        return $this->hasMany('App\Like');
    }

     //relacion one to many

    public function category_products(){
        return $this->hasMany('App\Category_product');
    }

     //relacion de muchos a uno

    public function tipop(){
        return $this->belongsTo('App\Tipop','tipop_id');
    }

    //relacion one to many

    public function destacados(){
        return $this->hasMany('App\Destacado');
    }


}

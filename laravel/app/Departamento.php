<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    protected $table = 'departamento';

    //relacion one to many

    public function city(){
    	return $this->hasMany('App\City');
    }

     //relacion de muchos a uno
    public function country(){
    	return $this->belongsTo('App\Country','country_id');
    }
}

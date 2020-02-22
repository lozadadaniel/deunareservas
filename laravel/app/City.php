<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    protected $table = 'city';

     //relacion one to many

    public function company(){
    	return $this->hasMany('App\Company');
    }

     //relacion de muchos a uno
    public function departamento(){
    	return $this->belongsTo('App\Departamento','depart_id');
    }
}

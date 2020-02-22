<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destacado extends Model
{
   
	//
    protected $table = 'destacado';

    //relacion de muchos a uno
    public function companys(){
    	return $this->belongsTo('App\Company','company_id');
    }
}

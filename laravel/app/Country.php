<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
     protected $table = 'country';

     //relacion one to many

    public function departamento(){
    	return $this->hasMany('App\Departamento');
    }
}

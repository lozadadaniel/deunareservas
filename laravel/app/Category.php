<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    //
    protected $table = 'category';

     //relacion one to many

    public function companys(){
    	return $this->hasMany('App\Company');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipop extends Model
{
    //

    protected $table = 'tipop';

    //relacion one to many

    public function companys(){
    	return $this->hasMany('App\Company');
    }
}

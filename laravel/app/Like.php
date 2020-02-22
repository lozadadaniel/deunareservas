<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likes';

    //relacion de muchos a uno
    public function user(){
    	return $this->belongsTo('App\User','user_id');
    }

    //relacion de muchos a uno
    public function companys(){
    	return $this->belongsTo('App\Company','company_id');
    }
}

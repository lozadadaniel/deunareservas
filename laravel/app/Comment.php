<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    //relacion de muchos a uno
    public function user(){
    	return $this->belongsTo('App\User','user_id');
    }

    //relacion de muchos a uno
    public function companys(){
    	return $this->belongsTo('App\Company','company_id');
    }
}

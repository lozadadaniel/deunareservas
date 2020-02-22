<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $table = 'images';

    //relacion one to many

    public function comments(){
    	return $this->hasMany('App\Comment');
    }

    //Relacion one to many

    public function likes(){
    	return $this->hasMany('App\Like');
    }

    //relacion de muchos a uno
    public function user(){
    	return $this->belongsTo('App\User','user_id');
    }
}

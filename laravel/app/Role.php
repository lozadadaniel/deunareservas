<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

	 protected $table = 'role';

	//Relacion muchos a muchos
    public function user(){
        return $this->belongsToMany('App\User');
    }
}

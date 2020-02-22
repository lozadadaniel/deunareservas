<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estado';

    public function reservas(){
    	return $this->hasMany('App\Reserva');
    }
}

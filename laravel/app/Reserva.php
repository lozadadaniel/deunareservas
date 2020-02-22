<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    //
    protected $table = 'reservas';
    protected $fillable = ['user_id', 'name','phone','correo','estado_id','company_id','dia','hora_inicio','hora_fin','notas','motivo','num_personas','monto_reserva'];
    //relacion de muchos a uno

    public function users(){
    	return $this->belongsTo('App\User','user_id');
    }

    //relacion de muchos a uno

    public function estados(){
    	return $this->belongsTo('App\Estado','estado_id');
    }

    //relacion de muchos a uno

    public function companys(){
    	return $this->belongsTo('App\Company','company_id');
    }

    //Relacion muchos a muchos

    public function products(){
    	return $this->belongsToMany('App\Product')->withTimestamps();
    }





}

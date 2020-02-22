<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    //
    use Notifiable;
    protected $table = 'products';

    //Relacion muchos a muchos

    public function reservas(){
        return $this->belongsToMany('App\Reserva')->withTimestamps();
    }

    //RElacion muchos a uno
    public function category_produts(){
        return $this->belongsTo('App\Category_product','category_product_id'); 
    }
}

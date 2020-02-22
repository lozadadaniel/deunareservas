<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product_reserva extends Model
{
    //
    use Notifiable;
    protected $table = 'product_reserva';
   protected $fillable = ['product_id', 'reserva_id','cantidad_producto','dia','hora'];
}

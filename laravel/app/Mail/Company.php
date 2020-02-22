<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Company extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Nueva Reserva';
    public $datos;
    public $shopping_cart;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datos,$shopping_cart)
    {
        $this->datos = $datos;
        $this->shopping_cart = $shopping_cart;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }
}

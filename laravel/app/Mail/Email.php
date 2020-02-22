<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Nueva reserva';
    public $datos;
    public $shopping_cart;
     public $company;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datos,$shopping_cart, $company)
    {
        $this->datos = $datos;
        $this->shopping_cart = $shopping_cart;
        $this->company = $company;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.reserva_company');
    }
}

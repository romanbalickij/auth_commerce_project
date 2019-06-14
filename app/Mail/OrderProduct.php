<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderProduct extends Mailable
{
    use Queueable, SerializesModels;


    public $order;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->order->email, $this->order->name)
            ->to('email@email.com','Name Person')
            ->subject('Order for Commerce Shop ')
            ->markdown('commerce.mail.orders_product');
    }
}

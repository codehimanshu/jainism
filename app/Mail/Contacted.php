<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contacted extends Mailable
{
    use Queueable, SerializesModels;
    protected $name, $email, $message, $phone;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $message, $phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
        $this->phone = $phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.contacted')->with([
            'name'=>$this->name,
            'email'=>$this->email,
            'message1'=>$this->message,
            'phone'=>$this->phone
        ]);
    }
}

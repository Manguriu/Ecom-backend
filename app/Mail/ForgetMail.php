<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ForgetMail extends Mailable
{
    use Queueable, SerializesModels;

    public $token;

    /**
     * Create a new message instance.
     */
    public function __construct($token)
    {
        $this->data = $token;
    }


    // public function build(): self
    // {
    //     $data = $this->token;

    //     return $this->from('ecomshop@support.com')
    //         ->view('mail.forget',compact('data'))
    //         ->subject('Password Reset Link');
    // }
    public function build()
    {
        $data = $this->data;
        return $this->from('ecomshop@support.com')->view('mail.forget',compact('data'))->subject('Password Reset Link');
    }


}

<?php

namespace App\Mail;

use App\contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class contactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $msg;
    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($r)
    {
        $this->msg=$r;
        $this->contact=contact::first();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $interval=strpos($this->msg['message_name'],' ');
        if ($interval){
            $this->msg['message_name']=substr($this->msg['message_name'],0,$interval);
        }
        return $this->from(env('MAIL_USERNAME'), 'Sanggar ABK')
            ->subject(env('APP_NAME').' (Message Delivered)')
            ->view('mails.contactMail');
    }
}

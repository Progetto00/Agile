<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {

        if (isset($this->data['action']))
            return $this->from('globex.corporation@univaq.it')->subject('Un nuovo evento ti aspetta')->view('nuovo_evento')->with('data', $this->data);
        else
            return $this->from('globex.corporation@univaq.it')->subject('Acquisto biglietti nuovo evento')->view('iscrizione_evento_email')->with('data', $this->data);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\SholudQueue;

class excelsheetMailer extends Mailable
{
    use Queueable, SerializesModels;
     
    protected $data;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build(){
      
        return $this->view('email.excelsheetmail',['data'=>$this->data]);
    }

    
}

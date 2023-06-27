<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\excelsheetMailer;
use Mail;

class SendQueueEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $details;
   // public $timeout  = 7200;
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $input['rollno']=$this->details['rollno'];
        $input['name']=$this->details['name'];
        $input['email']=$this->details['email'];
        // $input['subject']='Excel Sheet Mailer';
      
        $excelsheetMailer = new excelsheetMailer($input);
        Mail::to($this->details['email'])->cc('gowthaman@oceansoftwares.in')->send($excelsheetMailer);    

    }
}

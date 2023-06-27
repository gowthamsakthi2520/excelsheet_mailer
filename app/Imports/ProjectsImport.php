<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Mail\excelsheetMailer;
use Mail;



class ProjectsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {  

       
        $data =  array(
            'rollno'=> $row['rollno'],
            'name'=> $row['name'],
            'email' => $row['email'],
        );
         
        $details['rollno']=$data['rollno'];
        $details['name']=$data['name'];
        $details['email']=$data['email'];
        $details['subject']='Excel Sheet Mailer';
        $job = ( new \App\Jobs\SendQueueEmail($details))->delay(now()->addseconds(2));
        dispatch($job);
        echo "Mail has been sent Successfully";
        // Mail::to($row['email'])->cc('raghul@oceansoftwares.in')->send(new excelsheetMailer($data));
    
        
       

       
    }
}

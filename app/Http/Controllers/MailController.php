<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
   public function sendMail(Request $request){
    $to = $request->input('');
    $subject = $request->input('subject');
    $body = 'Enter the code below to complete your account set up'."\n\n".'7689536';
    //or $body = "Enter the code below to complete your account set up \n\n 7689536";
    $headers= 'From: Suigeneris <noreply@legacy.com>';//does not nedd to exist
    if(mail($to, $subject, $body, $headers)){
        echo 'Confirmation message has been sent to '.$to;
    }else{
        echo 'An error occured';
    }
   }
}

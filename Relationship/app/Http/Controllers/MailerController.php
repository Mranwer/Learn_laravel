<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use Mail;

class MailerController extends Controller
{
    function sendEmail(Request $request){
        $to = $request->email;    
        $subject = $request->subject;   
        $msg = $request->message;             
        Mail::to($to)->send(new WelcomeEmail($msg,$subject));
        return "Email Sent";
    }
}

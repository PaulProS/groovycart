<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function sendEmail(Request $request){
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'messageBody' => $request->message
        );
        Mail::send('emails.contact', $data, function ($message) use ($data){
            $message->from($data['email']);
            $message->to('iamlearning13@gmail.com');
            $message->subject($data['subject']);
        });
        return redirect('mail')->with('status', 'Your Details Are Submitted');
    }

    public function subscribeMail(Request $request){
        $data = array(
          'email' => $request->email
        );
        Mail::send('emails.newsletterSignUp', $data, function($message) use ($data){
           $message->from($data['email']);
           $message->to('iamlearning13@gmail.com');
           $message->subject('New Email Subscription');
        });
        return redirect('/')->with('status', 'Thank You For Subscribing');
    }

    public function getEmailForm(){
        return view('mail');
    }
}

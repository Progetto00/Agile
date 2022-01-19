<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail as FacadesMail;

class ContactController extends Controller
{
    public function contact()
    {
       return view('contact-us');
    }
    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'msg'=> $request->msg,
        ];
         FacadesMail::to('maurizio.dicarlo1999@gmail.com')->send(new ContactMail( $details));
         return back()->with('message_sent','Il tuo messaggio è stato inviato!');
    }
}

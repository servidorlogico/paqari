<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use Redirect;
use Session;

class MailController extends Controller
{
    public function store(Request $request){
        $data= $request->all();
        Mail::send('mail.confirm',$data, function($message){
            $message->subject('Correo de confirmacion');
            $message->to('servidorlogico@gmail.com');
            
        });
    
        
        Redirect::secure('/admin');
        
    }
}

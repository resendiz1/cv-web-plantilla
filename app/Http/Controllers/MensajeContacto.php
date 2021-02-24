<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeRecibido;

class MensajeContacto extends Controller
{
    public function store(){
        
    $msg = request()->validate([
        'name' => 'required|min:5',
        'email'=>'required|email',
        'asunto'=>'required|min:8',
        'message' =>'required|min:15'
    ]);


  //Enviando email
  Mail::to('resendiz.galleta@gmail.com')->queue(new MensajeRecibido($msg));

    return redirect()->back()->with('status', 'Mensaje enviado');
    }
}

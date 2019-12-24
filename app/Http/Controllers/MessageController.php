<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    /*
    public function store(Request $request){
        return $request;
    }
    */

    public function store(){
        //return request();
        //return request('name');
        $message = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'content'=>'required|min:3'
        ],[
            'name.required'=>'Su nombre es necesario',
            'subject.required'=>__('I need the subject')
        ]);

        // se usa 'queue' en vez de 'send' para que no se espere respuesta

        Mail::to('ejoelhuillca@gmail.com')->queue(new MessageReceived($message));

        return "Mensaje enviado";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageEvent;

class MessagesController extends Controller
{
    /**
     * @return view Retorna la vista a la sección de mensajes
     */
    public function index(){
        return view('messages');
    }

    /**
     * Evento para el envío de mensajes
     * @param \Illuminate\Http\Request  $request
     * @return bool
     */
    public function eventMessage(Request $request){
        event(
            new MessageEvent(
                $request->input('username'),$request->input('message')
            )
        );
    
        return ["success" => true];
    }
}

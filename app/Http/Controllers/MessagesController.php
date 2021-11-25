<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageEvent;

class MessagesController extends Controller
{
    public function index(){
        return view('messages');
    }

    public function eventMessage(Request $request){
        event(
            new MessageEvent(
                $request->input('username'),$request->input('message')
            )
        );
    
        return ["success" => true];
    }
}

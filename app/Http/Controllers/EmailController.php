<?php

namespace App\Http\Controllers;

use App\Events\sendMessageEvent;
use App\Mail\sendMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send_email(){
        $name = request('name');
        $content = request('content');
        $subject=request('subject');
       event(new sendMessageEvent($name,$content,$subject));
       return response()->json('ok');
        
    }
}

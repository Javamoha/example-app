<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function AddMessage(Request $request){
        $meds =Medicine::all();
        $message = new Message();
        $message->name=$request->name;
        $message->email=$request->email;
        $message->number=$request->number;
        $message->medicine=$request->medicine;
        $message->message = $request->message; 

        $message->save();
        return view ('user.cntact',['meds' => $meds]);
        
    }
    public function showMessage(Request $request )
    {
        $medi = Message::get();
        return view('admin/showmessage', compact('medi'));
}
    }


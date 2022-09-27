<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
        $data = $request->all();

        $message = new Message();

        $message->fill($data);
        $message->user_id = $request->user_id;
        // dovrebbe salvare i dati a db in una tabella contacts
        //--- IMPLEMENTARE IN FUTURIO ---//

        $message->save();

        return redirect()->route("ConfirmSendMessage");

        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Validator;

class ContactController extends Controller
{
    //
    function getAllMessages() {
        $contacts = Contact::all();
        return $contacts;
    }

    function insertMessage(Request $request){
        $data = $request->all();
        $msg = new Contact;
        $msg->user_id = $data["user_id"];
        $msg->contact_message =  $data["contact_message"];
        $msg->save();

        return response()->json(["insert message success" => true]);

    }
}

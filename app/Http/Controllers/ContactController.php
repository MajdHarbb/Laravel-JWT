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

    function insertMessage(){
        $msg = new Contact;
        $msg->user_id = "6";
        $msg->contact_message = "6";
        $msg->save();

        return response()->json(["success" => true]);

    }
}

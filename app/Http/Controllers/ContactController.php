<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    function getAllMessages() {
        $contacts = Contact::all();
        return $contacts;
    }
}

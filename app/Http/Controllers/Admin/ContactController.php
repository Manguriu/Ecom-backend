<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function Contacts(Request $request){
        $name =$request->input('name');
        $email =$request->input('email');
        $message =$request->input('message');
        date_default_timezone_set("Africa/Nairobi");
        $contact_time =date("h:i:sa");
        $contact_name =date("d-m-y");


        $result = Contact::insert([

            'name' =>  $name,
            'email' =>  $email,
            'message' =>  $message,
            'contact_time' =>  $contact_time,
            'contact_name' =>  $contact_name,
        ]);

        return  $result;

    }
}

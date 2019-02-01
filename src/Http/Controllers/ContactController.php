<?php

namespace Gemaakbar\Contact\Http\Controllers;


use App\Http\Controllers\Controller;
use Gemaakbar\Contact\Mail\ContactMailable;
use Gemaakbar\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{

    public function index()
    {
        return view('contact::contact');

    }

    public function send(Request $request)
    {

        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));

        $contact = new Contact();
        $contact->email = $request->email;
        $contact->name = $request->name;
        $contact->message = $request->message;
        $contact->save();


        return $contact;

    }


}

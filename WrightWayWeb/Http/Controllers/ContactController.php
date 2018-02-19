<?php

namespace WrightWayWeb\Http\Controllers;

use Illuminate\Http\Request;
use WrightWayWeb\Contact;
use WrightWayWeb\Mail\ContactForm;

class ContactController extends Controller
{
    public function index() {
        return view ('contact.index');
    }

    public function store() {

        $this->validate(request(), [
            'name'    => 'required',
            'email'   => 'required',
            'message' => 'required'
            ]);

        $newmessage          = new Contact;
        $newmessage->name    = strip_tags(htmlspecialchars(request('name')));
        $newmessage->email   = strip_tags(htmlspecialchars(request('email')));
        $newmessage->message = strip_tags(htmlspecialchars(request('message')));

        $newmessage->save();

        \Mail::to('wwright2@gmail.com')->send(new ContactForm($newmessage));

        return response()->json("success");
    }
}

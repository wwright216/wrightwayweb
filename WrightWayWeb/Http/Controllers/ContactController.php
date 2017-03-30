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
    	//validates message
    	$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required',
    		'message' => 'required'
    		]);
    	//creates a new message
    	$newmessage = new Contact;
    	$newmessage->name = strip_tags(htmlspecialchars(request('name')));
    	$newmessage->email = strip_tags(htmlspecialchars(request('email')));
    	$newmessage->message = strip_tags(htmlspecialchars(request('message')));
    	// saves it to the data base
    	$newmessage->save();
    	// sends an email with the info
    	\Mail::to('wwright2@gmail.com')->send(new ContactForm($newmessage));
        return response()->json("success");
    }
}

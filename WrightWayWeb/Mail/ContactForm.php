<?php

namespace WrightWayWeb\Mail;
use WrightWayWeb\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $newmessage;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $newmessage)
    {
        $this->newmessage = $newmessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contact.contactform');
    }
}

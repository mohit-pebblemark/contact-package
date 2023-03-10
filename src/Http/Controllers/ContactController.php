<?php
namespace Pebblemark\Contact\Http\Controllers;
use App\Http\Controllers\Controller;
use Pebblemark\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Pebblemark\Contact\Mail\ContactMailable;
use Pebblemark\Contact\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{

    public function contact()
    {
        return view('contact::contact');
    }

    public function contactSubmit(ContactFormRequest $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->name ,$request->contact_no, $request->message));
        Contact::create($request->all());
        return view('contact::thanku');
    }
}

<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\ContactFeedback;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        Contact::create(request()->all());
        try {
            $this->sendMail(request()->all());
        } catch (\Exception $e) {
            return back()->withFail('Sending Mail Failed, this is a problem with your internet connection, please try agin later');
        }
        return back()->withSuccess(" Thanks for contacting us, $request->name ");
    }

    public function sendMail($data)
    {
        $recepient = ['hackshadetechs@gmail.com'];
        Mail::to($recepient)->send(new ContactFeedback($data));
    }


}

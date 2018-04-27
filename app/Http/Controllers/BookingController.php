<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\Book;
use App\Mail\Booking;
use App\Http\Requests\BookRequest;
use Carbon\Carbon;

class BookingController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
      Book::create([
        'name' => request('name'),
        'email' => request('email'),
        'phone' => request('phone'),
        'article_id' => request('article_id'),
        'date' => Carbon::parse(request('date')),
        'time' => Carbon::parse(request('time')),
      ]);
      try {
          $this->sendMail(request()->all());
      } catch (\Exception $e) {
          return back()->withFail('Sending Mail Failed, this is a problem with your internet connection, please try agin later');
      }
      return back()->withSuccess(" Thanks for booking with us, $request->name ");
    }

    public function sendMail($data)
    {
        $recepient = ['hackshadetechs@gmail.com'];
        Mail::to($recepient)->send(new Booking($data));
    }


}

<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\Book;
use App\Mail\Booking;
use App\Http\Requests\BookRequest;
use Carbon\Carbon;
use App\Http\Controllers\PaymentsController;

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
      $payment = new PaymentsController();
      Book::create([
        'name' => request('name'),
        'email' => request('email'),
        'phone' => request('phone'),
        'article_id' => request('article_id'),
        'date' => Carbon::parse(request('date')),
        'time' => Carbon::parse(request('time')),
      ]);
      return $payment->payment(request('name'), request('email'), request('phone'), request('article_id'));

      // try {
      //     $this->sendMail(request()->all());
      //     // 
      //     return dd('success');
      // } catch (\Exception $e) {
      //     return back()->withFail('Sending Mail Failed, this is a problem with your internet connection, please try agin later');
      // }

    }

    public function sendMail($data)
    {
        $recepient = ['hackshadetechs@gmail.com'];
        Mail::to($recepient)->send(new Booking($data));
    }


}

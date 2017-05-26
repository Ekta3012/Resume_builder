<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Http\Requests;

class EmailController extends Controller
{
    public function send(Request $request){
      $title = $request->input('title');
      $content = $request->input('content');
      $address = $request->input('address');

      Mail::send('auth.emails.send', ['title' => $title, 'content' => $content], function ($message) use ($address)
      {
        $message->subject('testing');
        $message->to($address);
      });

      return response()->json(['message' => 'Request completed']);
    }
}

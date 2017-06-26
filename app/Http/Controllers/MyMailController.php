<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
class MyMailController extends Controller
{
    public function sendmail(Request $request){
    	Mail::send('emails.send',['request'=>$request], function ($message)
		{
		    $message->from('nhandangkytuvan@gmail.com', 'PK Nam Khang');
		    $message->to('hu1851680732@gmail.com');
		    //$message->to('vantruong3289@gmail.com');
		    $message->subject('Khám Trĩ');
		});
		return 1;
    }
}
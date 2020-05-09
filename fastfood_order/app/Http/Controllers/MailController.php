<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class MailController extends Controller
{
	public function index()
	{
		return view('shop.contacts');
	}

	public function send(Request $request)
	{

		$this->validate($request, [

				'name' => 'required',
				'email' => 'required',
				'phone' => 'required',
				'message' => 'required',
		]);
		$data = array(
			'name' => $request->name,
			'email' => $request->email,
			'phone' => $request->phone,
			'message' => $request->message,
		);
		Mail::to('a.muzrafkulov@student.inha.uz')->send(new SendMail($data));

		session()->flash('message', 'Email sent successfully');

		return redirect()->back();
	}
    
}
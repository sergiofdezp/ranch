<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Auth;

class EmailController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('contact.email');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
          'emailFrom' => 'required',
          'subject' => 'required',
          'name' => 'required',
          'content' => 'required',
        ]);

        $data = [
          'subject' => $request->subject,
          'name' => $request->name,
          'email' => $request->email,
          'content' => $request->content,
          'emailFrom' => $request->emailFrom
        ];

        Mail::send('contact.email-template', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['subject']);
        });

        return back()->with('message', 'El mensaje ha sido enviado correctamente.');
    }
}
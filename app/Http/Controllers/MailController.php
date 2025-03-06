<?php

namespace App\Http\Controllers;

use App\Mail\NewMessage;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        try {

            $validate = Validator::make($request->all(), [
                'name' => 'required',
                'email' => ['required', 'email'],
                'message' => ['required'],
            ], [
                'name.required' => "Please provide your name address.",
                'email.required' => "Please provide your email address.",
                'email.email' => "Please enter a valid email address.",
                'message.required' => "A message is required. Kindly provide your message.",
            ]);
            if ($validate->fails()) {
                return response()->json(['message' => $validate->errors()], 422);
            }
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ];
            Mail::to(env('MAIL_TO'))->send(new NewMessage($data));
            return response()->json(['message' => 'Email sent successfully.'], 200);
        } catch (\Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());
            return response()->json(['message' => 'An error occurred while sending the email. Please try again later.'], 500);
        }


    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class sendWelcomeMail extends Controller
{
    public function sendWelcomeMail(Request $request)
    {
        $details = [
            'Name' => "$request->name",
            'Email' => "$request->email",
        ];

        Mail::to($request->email)->send(new WelcomeMail($details));

        return response()->json([
            "status_code" => 200,
            "message"=> "message sent successfull"
        ]);
    }
}

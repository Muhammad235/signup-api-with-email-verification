<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use App\Http\Requests\EmailVerificationRequest;

class ResgisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function store(Request $request){

        $user = event(new Registered(User::create($request->only("name","email","password"))));
        
        if($user){
            return response()->json([
                "status"=> "success",
                "message" => "user created successfully",
                "token" => $user->createToken("token")->plainTextToken
            ]);
        }
    }

    public function verify(EmailVerificationRequest $request)
    {
        User::find($request->id)->markEmailAsVerified();

        return response(['message' => 'Account verified.']);
    }
}

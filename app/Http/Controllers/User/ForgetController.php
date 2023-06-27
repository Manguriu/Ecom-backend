<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Http\Requests\ForgetRequest;
use DB;
use Illuminate\Support\Facades\Hash;
use Mail;
use App\Mail\ForgetMail;

class ForgetController extends Controller
{
    public function ForgetPassword(ForgetRequest $request){
        $email = $request ->email;

        if(User::where('email',$email)->doesntExist()){
            return response([
                'message'=>'Email entered cannot be Found'
            ],401);
        }
        //to generate random tokens
        $token = rand(10,100000);

        try{
            DB::table('password_reset_tokens')->insert([
                'email' =>$email,
                'token'=>$token
            ]);

            //mail send to user
            Mail::to($email)->send(new ForgetMail($token));

            return response([
                'message' =>"Resent Link sent to your Email"
            ],200);


        }catch(Exception $exception){
            return response([
                'message' => $exception ->getMessage()
            ],400);
        }

    }//end Method
}

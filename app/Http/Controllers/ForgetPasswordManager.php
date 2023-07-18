<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Http\Request;

class ForgetPasswordManager extends Controller
{
    function forgetPassword(){
        return view("forget-password");
    }

    function forgetPasswordPost(Request $request){
        $request -> validate([
            'phone => required|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets') -> insert([
            'phone' => $request -> phone,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send("emails.forget-password",['token' => $token], function($message) use ($request){
            $message -> to($request -> phone);
            $message -> subject("Reset Password");
        });

        return redirect() -> to(route("forget.password"))
        -> with("success", "We will send an phone to reset password.");
    }

    function resetPassword($token){
        return view("new-password", compact('token'));
    }

    function resetPasswordPost(Request $request){
        $request->validate([
            "phone" => "required|exists:users",
            
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                "phone" => $request -> phone,
                "token" => $request -> token,
        ])->first();



        if(!$updatePassword){
            return redirect()-> to(route("reset.password")) -> with("error", "Invalid");
        }

        User::where("phone", $request -> phone)
            ->update(["password" => Hash::make($request -> password)]);

        DB::table("password_resets") -> where(["phone" => $request -> phone]) ->delete();

        return redirect()-> to(route('login')) -> with("success" , "Password reset success");
    }
}

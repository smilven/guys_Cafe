<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhoneNumberVerifyController extends Controller
{
    protected $redirectTo = '/phone/verify';

    public function show(Request $request)
{
    if ($request->user()->userPhoneVerified()) {
        return redirect()->route('home.user');
    } else {
        return view('phoneverify.show');
    }
}
    public function verify(Request $request)
    {
       if ($request->user()->verification_code !== $request->code) {
                return back()->withErrors(['Invalid Code Please Try Again!', 'Invalid Code Please Try Again!']);
            }
    
            if ($request->user()->userPhoneVerified()) {
                return redirect()->route('home.user');
            }
    
            $request->user()->phoneVerifiedAt();
    
            return redirect()->route('home.user')->with('Your phone was successfully verified!', 'Your phone was successfully verified!');
        }
    
}

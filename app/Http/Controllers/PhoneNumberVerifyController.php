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
                return back()->withErrors(['msg', 'Invalid Code Please Try Again!']);
            }
    
            if ($request->user()->userPhoneVerified()) {
                return redirect()->route('home.user');
            }
    
            $request->user()->phoneVerifiedAt();
    
            return redirect()->route('home.user')->with('status', 'Your phone was successfully verified!');
        }
    
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PhoneVerificationController extends Controller
{
    public function buildTwiMl($code)
    {
       $code = $this->formatCode($code);
       $response = new VoiceResponse();
       $response->say("Hello, This is your verification code. {$code}.");
      echo $response;
    }
    
    public function formatCode($code)
    {
        $collection = collect(str_split($code));
        return $collection->reduce(
         function ($carry, $item) {
              return "{$carry}. {$item}";
          }
        );
    }
}

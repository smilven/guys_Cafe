<?php

namespace App\Http\Controllers;
use App\Models\PaymentRecord;
use Illuminate\Http\Request;

class RecordController extends Controller
{


public function show(Request $request)
{
    $paymentDetails = PaymentRecord::all();
    return view('record', compact('paymentDetails'));
}

public function getPaymentData(Request $request)
{
    if ($request->ajax()) {
        $paymentDetails = PaymentRecord::all();
        return response()->json($paymentDetails);
    }

    // Handle non-AJAX requests or return an error response if needed
}

}

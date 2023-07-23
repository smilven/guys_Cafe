<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentDetail;
use App\Models\PaymentRecord;

class CashController extends Controller
{
    public function index()
    {
        $paymentDetails = PaymentDetail::all();
        return view('cash', compact('paymentDetails'));
    }

    public function performCashPayment(Request $request)
    {
        $paymentId = $request->input('payment_id');
        $paymentDetail = PaymentDetail::find($paymentId);

        if (!$paymentDetail) {
            return response()->json(['error' => 'Payment detail not found'], 404);
        }

        // Create a new payment record with the payment method as "Cash"
        $paymentRecord = new PaymentRecord();
        $paymentRecord->userID = $paymentDetail->userID;
        $paymentRecord->totalFoodPrice = $paymentDetail->totalFoodPrice;
        $paymentRecord->nett_total = $paymentDetail->nett_total;
        $paymentRecord->earnPoint = $paymentDetail->earnPoint;
        $paymentRecord->discount = $paymentDetail->discount;
        $paymentRecord->payment_method = 'Cash Payment'; // Set the payment method as "Cash"
        // Add other fields as needed for payment record
        $paymentRecord->save();

        // Delete the payment detail from the paymentDetails table after payment
        $paymentDetail->delete();

        return response()->json(['message' => 'Cash payment recorded successfully']);
    }
}

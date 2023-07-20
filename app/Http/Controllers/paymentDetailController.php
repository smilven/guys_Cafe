<?php


namespace App\Http\Controllers;
use App\Models\CardInfor;
use App\Models\Payment;
use App\Models\PaymentDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\paymentRecord;

class paymentDetailController extends Controller
{
    public function store(Request $request)
    {  
        $userID = Auth::id();
    
        // Check if the PaymentDetail record exists for the user
        $paymentDetail = PaymentDetail::where('userID', $userID)->first();
    
        if (!$paymentDetail) {
            // If the PaymentDetail record doesn't exist, create a new one
            $paymentDetail = new PaymentDetail;
            $paymentDetail->userID = $userID;
            $paymentDetail->totalFoodPrice = 0; // Initialize the totalFoodPrice to 0 for new users
            $paymentDetail->nett_total = 0;
            $paymentDetail->discount = 0;
        }
    
        // Set the new payment method from the request
        $paymentDetail->payment_method = "Credit Card"; // Assuming 'payment_method' is the name of the input field
    
        // Save the PaymentDetail record
        $paymentDetail->save();
    


        $paymentRecord = paymentRecord::where('userID', $userID)->first();
        if (!$paymentDetail) {
        $paymentRecord = new paymentRecord();
        // Assign values from the paymentDetail
        $paymentRecord = new PaymentDetail;
        $paymentRecord->userID = $userID;
        $paymentRecord->totalFoodPrice = 0; // Initialize the totalFoodPrice to 0 for new users
        $paymentRecord->nett_total = 0;
        $paymentRecord->discount = 0;
        }
        $paymentRecord->payment_method = $paymentDetail->payment_method="Credit Card";
        $paymentRecord->save();







        
        // Now, handle the CardInfo record
        $cardInfo = new CardInfor;
        $cardInfo->expiry_date = $request->input('expiry_date'); 
        $cardInfo->card_number = $request->input('card_number');
        $cardInfo->cvv = $request->input('cvv');
        $cardInfo->cardholder_name = $request->input('cardholder_name');
        $cardInfo->userID = $userID;
    
        $cardInfo->save();
    
        return response()->json([
            'status' => 200,
            'message' => 'Mycart added successfully.'
        ]);    
    }
    
}



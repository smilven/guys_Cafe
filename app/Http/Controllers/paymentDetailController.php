<?php

// app/Http/Controllers/paymentDetailController.php

namespace App\Http\Controllers;

// app/Http/Controllers/paymentDetailController.php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\PaymentDetail;
use Illuminate\Http\Request;

class paymentDetailController extends Controller
{
    public function calculatePaymentDetails($userID)
    {
        // Step 1: Fetch data from the payments table based on userID
        $payments = Payment::where('userID', $userID)->get();

        $totalFoodPrice = 0;

        // Step 2: Calculate totalFoodPrice
        foreach ($payments as $payment) {
            // Calculate total price for each food item based on latest_food_price and quantity
            $totalFoodPrice += $payment->latest_food_price * $payment->quantity;
        }

        // Step 3: Calculate nett_total (totalFoodPrice - discount)
        $discount = 0; // Set default discount to 0

        $nett_total = $totalFoodPrice - $discount;

        // Now, you can save the calculated values to the payment_details table
        $paymentDetail = new PaymentDetail();
        $paymentDetail->userID = $userID;
        $paymentDetail->totalFoodPrice = $totalFoodPrice;
        $paymentDetail->discount = $discount;
        $paymentDetail->nett_total = $nett_total;
        $paymentDetail->payment_method = 'Cash'; // Change this to the actual payment method

        // Save the data to the payment_details table
        $paymentDetail->save();

        // You can also return the calculated values if you need them for other purposes
        return [
            'totalFoodPrice' => $totalFoodPrice,
            'nett_total' => $nett_total,
        ];
    }
}



<?php


namespace App\Http\Controllers;

use App\Models\CardInfor;
use App\Models\Payment;
use App\Models\PaymentDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\paymentRecord;
use App\Models\Redemption;
use App\Models\User;
use App\Models\Order;
use App\Models\mycart;


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


        // Now, handle the CardInfo record
        $cardInfo = new CardInfor;
        $cardInfo->expiry_date = $request->input('expiry_date');
        $cardInfo->card_number = $request->input('card_number');
        $cardInfo->cvv = $request->input('cvv');
        $cardInfo->cardholder_name = $request->input('cardholder_name');
        $cardInfo->userID = $userID;
        $cardInfo->save();


 




        $paymentRecord = new paymentRecord();
        // Assign values from the paymentDetail
        $paymentRecord->payment_method = $paymentDetail->payment_method;
        $paymentRecord->nett_total = $paymentDetail->nett_total;
        $paymentRecord->earnPoint = $paymentDetail->earnPoint;
        $paymentRecord->discount = $paymentDetail->discount;
        $paymentRecord->totalFoodPrice = $paymentDetail->totalFoodPrice;
        $paymentRecord->userID = $paymentDetail->userID;
        $paymentRecord->save();
       


        $paymentID = $paymentRecord->id;

        $user = $request->user();

        $cartItems = mycart::where('userID', $user->id)->get();

        foreach ($cartItems as $cartItem) {
            // Save order
            $order = new Order();
            // Assign values from the cart item
            $order->quantity = $cartItem->quantity;
            $order->orderID = $cartItem->orderID;
            $order->food_id = $cartItem->food_id;
            $order->food_name = $cartItem->food_name;
            $order->food_requirement = $cartItem->food_requirement;
            $order->userID = $cartItem->userID;
            $order->tableNumber = $cartItem->tableNumber;
            $order->food_price = $cartItem->lastest_food_price;

            // Assign the obtained paymentID to the paymentID field in the Order model
            $order->paymentID = $paymentID;
        
            $order->save();
        
  
        }


        $user = User::find($userID);




        if ($user) {
            // Update the user's point with the value from the paymentDetail's earnPoint
            $user->point += $paymentDetail->earnPoint;
            $user->save();
        } else {
            // Handle the case if the user record is not found
            // You may want to decide what to do in this situation (e.g., create a new user, show an error, etc.)
        }

        // Delete existing data from the Payment and PaymentRecord tables (assuming you have models for them)

        // Delete Payment records
        Payment::where('userID', $userID)->delete();

        // Delete PaymentRecord records
        PaymentDetail::where('userID', $userID)->delete();





           $coupon = Redemption::where('userID', $userID)->first();


    if ($coupon) {
        $coupon->delete();
        return response()->json(['message' => 'good'],);

    }else{
        return response()->json(['message' => $coupon],);

    }
    





    
        return response()->json([
            'status' => 200,
            'message' => 'Added successfully.'
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentDetail;
use App\Models\PaymentRecord;
use App\Models\payment;
use App\Models\mycart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

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

        $userID = $paymentDetail->userID;
        DB::beginTransaction();
        try {
            payment::where('userID', $userID)->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['error' => 'Failed to delete payments'], 500);
        }


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
            $order->food_price = $cartItem->lastest_food_price;

            // Assign the obtained paymentID to the paymentID field in the Order model
            $order->paymentID = $paymentID;

            $order->save();


        }

        // Delete the payment detail from the paymentDetails table after payment
        $paymentDetail->delete();

        return response()->json(['message' => 'Cash payment recorded successfully']);
    }


}

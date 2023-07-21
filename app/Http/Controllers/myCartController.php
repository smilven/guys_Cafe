<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mycart;
use App\Models\Payment; 
use App\Models\paymentDetail;
use App\Models\paymentRecord;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class myCartController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
        }
        


        public function fetchAllOrder()
{
    $mycarts = DB::table('mycarts')

        ->join('food_menus', 'mycarts.food_id', '=', 'food_menus.id')
        ->select('mycarts.*','quantity','food_menus.avatar', 'food_menus.food_name', 'food_menus.food_price')
        ->where('mycarts.userID', '=', (int)Auth::id())
        ->get();

    return response()->json([
        'mycarts' => $mycarts, // Correct key name
    ]);
}

public function fetchAllPayment()
{
    $payments = DB::table('payments')

    ->select('payments.*')
    ->where('payments.userID', '=', (int)Auth::id())
    ->get();
    return response()->json(['payments' => $payments]); // Correct key name
}

public function fetchAllPaymentDetail()
{

    $paymentDetail = DB::table('payment_details')

    ->select('payment_details.*')
    ->where('payment_details.userID', '=', (int)Auth::id())
    ->get();
    return response()->json(['payment_details' => $paymentDetail]); // Correct key name
}
public function addCart(Request $request)
{
    $foodId = $request->input('food_id');
    $quantity = $request->input('quantity_food');
    $lastest_food_price = $request->input('food_price');
    $food_price = $request->input('food_price');

    $userId = Auth::id();
    $foodRequirement = $request->input('food_requirement') ?: "";

    // Calculate total food price (quantity * latest_food_price)
    $totalFoodPrice = $lastest_food_price * $quantity;
 // Calculate nett total after discount (assuming discount is a field in the request)
 $discount = $request->input('discount') ?: 0; // If no discount provided, default to 0
 $nett_total = $totalFoodPrice - $discount;

    $existingCartItem = DB::table('mycarts')
        ->where('food_id', $foodId)
        ->where('userID', $userId)
        ->where('food_requirement', $foodRequirement)
        ->first();

    if ($existingCartItem) {
        $newQuantity = $existingCartItem->quantity + $quantity;
        $newPrice = $existingCartItem->lastest_food_price + ($lastest_food_price * $quantity);

        DB::table('mycarts')
            ->where('food_id', $foodId)
            ->where('userID', $userId)
            ->where('food_requirement', $foodRequirement)
            ->update(['quantity' => $newQuantity, 'lastest_food_price' => $newPrice]);

        // Update the corresponding payment record if it exists
        $payment = Payment::where('food_id', $foodId)
            ->where('userID', $userId)
            ->where('food_requirement', $foodRequirement)
            ->first();

        if ($payment) {
            $payment->quantity = $newQuantity;
            $payment->lastest_food_price = $newPrice;
            // You can add more fields to update as needed
            $payment->save();
        }
    } else {
        $mycart = new Mycart;
        $mycart->quantity = $quantity;
        $mycart->orderID = "";
        $mycart->lastest_food_price = $lastest_food_price * $quantity;
        $mycart->food_requirement = $foodRequirement;
        $mycart->userID = $userId;
        $mycart->food_id = $foodId;
        $mycart->food_name = $request->input('food_name');

        $mycart->save();

        // Now, let's add the data to the payment database as well
        $payment = new Payment;
        $payment->mycart_id = $mycart->id; // Use the auto-incrementing ID from mycarts table
        $payment->food_id = $foodId;
        $payment->food_name = $request->input('food_name');
        $payment->food_requirement = $foodRequirement;
        $payment->lastest_food_price = $lastest_food_price * $quantity;
        $payment->quantity = $quantity;
        $payment->userID = $userId;
        $payment->food_price = $food_price;
        $payment->save();
    }

    
      // Save the payment details to the PaymentDetail model/database
      $paymentDetail = PaymentDetail::where('userID', $userId)->first();

    if (!$paymentDetail) {
        $paymentDetail = new PaymentDetail;
        $paymentDetail->userID = $userId;
        $paymentDetail->totalFoodPrice = 0; // Initialize the totalFoodPrice to 0 for new users
        $paymentDetail->nett_total = 0;
        $paymentDetail->discount = 0;
        $paymentDetail->payment_method = "";
    }

    // Update the payment details
    $paymentDetail->totalFoodPrice += $totalFoodPrice; // Accumulate the totalFoodPrice
    $paymentDetail->earnPoint +=  (($totalFoodPrice/10)|0) ;
    $paymentDetail->nett_total += $nett_total; // Accumulate the nett_total
    $paymentDetail->discount += $discount; // Accumulate the discount
    // Update other necessary fields as needed
    $paymentDetail->save();

    
    
   
    return response()->json([
        'status' => 200,
        'message' => 'Mycart added successfully.'
    ]);
}







public function delete($id)
{
    $cartItem = Mycart::find($id);

    if ($cartItem) {
        // Find the corresponding payment record
        $payment = Payment::where('mycart_id', $cartItem->id)
            ->where('userID', $cartItem->userID)
            ->where('food_requirement', $cartItem->food_requirement)
            ->first();

        if ($payment) {
            // Calculate the reduction in price and nett_total
            $reductionPrice = $cartItem->lastest_food_price;
            $reductionNettTotal = $reductionPrice - $payment->discount;

            // Calculate the reduction in earnPoint
            $earnPointReduction = (($reductionPrice/10)|0);

            // Update the PaymentDetail record
            $paymentDetail = PaymentDetail::where('userID', $cartItem->userID)->first();
            if ($paymentDetail) {
                $paymentDetail->totalFoodPrice -= $reductionPrice;
                $paymentDetail->nett_total -= $reductionNettTotal;
                $paymentDetail->earnPoint -= $earnPointReduction; // Deduct the earnPoint
                // Update other necessary fields as needed
                $paymentDetail->delete();
            }

            // Delete the corresponding payment record
            $payment->delete();
        }

        // Delete the mycart item
        $cartItem->delete();

        if ($paymentDetail = PaymentDetail::find($id)) {
            // Delete the PaymentDetail record
            $paymentDetail->delete();
    
            return response()->json([
                'status' => 200,
                'message' => 'Payment detail removed successfully.'
            ]);
        }
    
        return response()->json(['error' => 'Failed to delete payment detail.']);
    }


    $paymentDetail = paymentDetail::find($id);
    $paymentDetail->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Item removed successfully.'
        ]);

    return response()->json(['error' => 'Failed to delete item and update payment details.']);
}





/*
public function deletePaymentDetail($id)
{
    $paymentDetail = paymentDetail::find($id);


        // Delete the mycart item
        $paymentDetail->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Item removed successfully.'
        ]);
    

    return response()->json(['error' => 'Failed to delete item and update payment details.']);
}
*/


public function update(Request $request, $id)
{
    $newRequirement = $request->input('requirement');

    $mycart = Mycart::find($id);
    $mycart->food_requirement = $newRequirement;
    $mycart->save();

    // Fetch the correct payment record based on food_id and userID
    $payment = Payment::where('mycart_id', $mycart->id)
        ->where('userID', $mycart->userID)
        ->first();

    if ($payment) {
        $payment->food_requirement = $newRequirement;
        $payment->save();
    }

    return response()->json([
        'status' => 200,
        'message' => 'Requirement updated successfully.'
    ]);
}


   
}

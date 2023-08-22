<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mycart;
use App\Models\Order;
use App\Models\Kitchen;
use App\Models\confirmOrder;
use App\Models\cash;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
{
    // Retrieve the current authenticated user
    $user = $request->user();
    
    // Retrieve the cart items for the current user
    $cartItems = mycart::where('userID', $user->id)->get();

 
    

    // Iterate over the cart items and store the relevant attributes in the order
    foreach ($cartItems as $cartItem) {
        // Save order
       $order = new Order();
        // Assign values from the cart item
        $order->quantity = $cartItem->quantity;
        $order->orderID = $cartItem->orderID;
        $order->food_id = $cartItem->food_id;
        $order->food_name = $cartItem->food_name;
        $order->food_price = $cartItem->lastest_food_price;
        $order->tableNumber = $cartItem->tableNumber;
        $order->food_requirement = $cartItem->food_requirement;
        $order->userID = $cartItem->userID;
        $order->paymentID = "";

        $order->save();

        $confirmOrder = new confirmOrder();
        // Assign values from the cart item
        $confirmOrder->quantity = $cartItem->quantity;
        $confirmOrder->orderID = $cartItem->orderID;
        $confirmOrder->food_id = $cartItem->food_id;
        $confirmOrder->food_name = $cartItem->food_name;
        $confirmOrder->food_price = $cartItem->lastest_food_price;
        $confirmOrder->tableNumber = $cartItem->tableNumber;
        $confirmOrder->food_requirement = $cartItem->food_requirement;
        $confirmOrder->userID = $cartItem->userID;
        $confirmOrder->paymentID = "";

        $confirmOrder->save();

   // Create a new order
   $totalFoodPrice = $confirmOrder->food_price ;

   $cash = Cash::where('userID',$user->id)->first(); // Check if cash row exists for the user
        if ($cash) {
            // Update the existing cash row
            $cash->totalFoodPrice += $totalFoodPrice;
            $cash->nett_total = $cash->totalFoodPrice; // Assuming no discounts
            $cash->earnPoint += (int)($totalFoodPrice);
            $cash->tableNumber = $order->tableNumber;
            $cash->save();
        } else {
            // Create a new cash row
            $newCash = new Cash();
            $newCash->userID = $cartItem->userID;
            $newCash->totalFoodPrice = $totalFoodPrice;
            $newCash->nett_total = $totalFoodPrice; // Assuming no discounts
            $newCash->earnPoint = (int)($totalFoodPrice);
            $newCash->tableNumber = $order->tableNumber;
            $newCash->discount = 0;
            $newCash->save();
    
        }
    
        // Save kitchen details
        $kitchen = new Kitchen();
        // Assign values from the cart item
        $kitchen->quantity = $cartItem->quantity;
        $kitchen->orderID = $cartItem->orderID;
        $kitchen->food_id = $cartItem->food_id;
        $kitchen->food_name = $cartItem->food_name;
        $kitchen->food_requirement = $cartItem->food_requirement;
        $kitchen->tableNumber = $cartItem->tableNumber;
        $kitchen->userID = $cartItem->userID;
        $kitchen->food_Status = "placeorder";
        $kitchen->save();

 
 
    }

    
    // Clear the cart for the current user
    mycart::where('userID', $user->id)->delete();

    // Redirect the user to the 'home' route
    return response()->json([
        'status'=>200,
        'message'=>'mycart Added Successfully.'
    ]);

}

}

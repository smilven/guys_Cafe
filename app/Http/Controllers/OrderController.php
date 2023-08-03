<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mycart;
use App\Models\Order;
use App\Models\Kitchen;
use App\Models\payment;


class OrderController extends Controller
{
    public function placeOrder(Request $request)
{
    // Retrieve the current authenticated user
    $user = $request->user();

    // Retrieve the cart items for the current user
    $cartItems = mycart::where('userID', $user->id)->get();

    // Create a new order


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

        $order->food_requirement = $cartItem->food_requirement;
        $order->userID = $cartItem->userID;
        $order->paymentID = "";

        $order->save();
    
        // Save kitchen details
        $kitchen = new Kitchen();
        // Assign values from the cart item
        $kitchen->quantity = $cartItem->quantity;
        $kitchen->orderID = $cartItem->orderID;
        $kitchen->food_id = $cartItem->food_id;
        $kitchen->food_name = $cartItem->food_name;
        $kitchen->food_requirement = $cartItem->food_requirement;
        $kitchen->userID = $cartItem->userID;
        $kitchen->food_Status = "placeorder";
        $kitchen->save();


 
    }


    // Save the order


    
    // Clear the cart for the current user
    mycart::where('userID', $user->id)->delete();

    // Redirect the user to the 'home' route
    return response()->json([
        'status'=>200,
        'message'=>'mycart Added Successfully.'
    ]);

}

}

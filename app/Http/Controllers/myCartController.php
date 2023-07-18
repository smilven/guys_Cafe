<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mycart;
use App\Models\Payment; 
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
        'mycarts' => $mycarts,
    ]);
}


public function addCart(Request $request)
{
    $foodId = $request->input('food_id');
    $quantity = $request->input('quantity_food');
    $lastest_food_price = $request->input('food_price');
    $userId = Auth::id();
    $foodRequirement = $request->input('food_requirement') ?: "";
    $totalFoodPrice = $lastest_food_price * $quantity;

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

        $payment = Payment::where('food_id', $foodId)
            ->where('userID', $userId)
            ->where('food_requirement', $foodRequirement)
            ->first();

        if ($payment) {
            $payment->quantity = $newQuantity;
            $payment->lastest_food_price = $newPrice;
            $payment->total_food_price = $totalFoodPrice;
            $payment->nett_total = $totalFoodPrice;
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

        $payment = new Payment;
        $payment->food_id = $foodId;
        $payment->food_name = $request->input('food_name');
        $payment->food_requirement = $foodRequirement;
        $payment->quantity = $quantity;
        $payment->userID = $userId;
        $payment->lastest_food_price = $lastest_food_price;
        $payment->total_food_price = $totalFoodPrice;
        $payment->discount = 0; 
        $payment->nett_total = $totalFoodPrice; 
        $payment->payment_method = "";
        $payment->payment_id = ""; 

        $payment->save();
    }

    return response()->json([
        'status' => 200,
        'message' => 'Mycart added successfully.'
    ]);
}



public function delete($id)
{
    $cartItem = Mycart::find($id);

    if ($cartItem) {
        $payment = Payment::where('food_id', $cartItem->food_id)
            ->where('userID', $cartItem->userID)
            ->where('food_requirement', $cartItem->food_requirement)
            ->first();

        if ($payment) {
            $payment->delete();
        }

        $cartItem->delete();
    }

    return response()->json(['success' => 'Item and corresponding payment deleted successfully!']);
}

  public function update(Request $request, $id)
{
    $newRequirement = $request->input('requirement');

    $mycart = Mycart::find($id);
    $mycart->food_requirement = $newRequirement;
    $mycart->save();

    return response()->json([
        'status' => 200,
        'message' => 'Requirement updated successfully.'
    ]);
}

   
}

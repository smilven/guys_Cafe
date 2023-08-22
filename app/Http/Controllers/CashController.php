<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\PaymentDetail;
use App\Models\PaymentRecord;
use App\Models\payment;
use App\Models\mycart;
use App\Models\confirmOrder;
use App\Models\Order;
use App\Models\User;
use App\Models\cash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class CashController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $paymentDetails = cash::all();
           
        $myreceipt =confirmOrder:: all();
           
           
    
        return view('Admin.cashPaymentAdmin', compact('paymentDetails', 'myreceipt'));
    }
    

    public function performCashPayment(Request $request)
    {
        $paymentId = $request->input('payment_id');
        $paymentDetail = cash::find($paymentId);

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

        DB::beginTransaction();
        try {
            paymentDetail::where('userID', $userID)->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['error' => 'Failed to delete payments'], 500);
        }


        $user = User::find($userID);
        if ($user) {
            // Update the user's point with the value from the paymentDetail's earnPoint
            $user->point += $paymentDetail->earnPoint;
            $user->save();
        } 

        $paymentID = $paymentRecord->id;

        Order::where('userID', $userID)
            ->where(function ($query) {
                $query->whereNull('paymentID')
                    ->orWhere('paymentID', '');
            })
            ->update(['paymentID' => $paymentID]);

        DB::beginTransaction();
        try {
            // Delete records from the confirm_orders table associated with the user
            confirmOrder::where('userID', $userID)->delete();
            // Commit the changes
            DB::commit();
        } catch (\Exception $e) {
            // Rollback the changes if an error occurs
            DB::rollback();
            return response()->json(['error' => 'Failed to delete confirm_orders records'], 500);
        }
        

        DB::beginTransaction();
        try {
            // Delete cart items associated with the user
            mycart::where('userID', $userID)->delete();
    
            // Commit the changes
            DB::commit();
        } catch (\Exception $e) {
            // Rollback the changes if an error occurs
            DB::rollback();
            return response()->json(['error' => 'Failed to delete cart items'], 500);
        }

        
        // Delete the payment detail from the paymentDetails table after payment
        $paymentDetail->delete();

        return response()->json(['message' => 'Cash payment recorded successfully']);
    }
     //这边delete displayConfirmFoodDetail
     function DeleteSubOrder($id)
     {
         $confirmOrder = confirmOrder::find($id);
         $deletedFoodPrice = $confirmOrder->food_price; // Get the food price to deduct
     
         $confirmOrder->delete();
     
         // Deduct the deleted food price from the cashes table
         $userCash = Cash::where('userID', $confirmOrder->userID)->first();

         if ($userCash) {
             $userCash->totalFoodPrice -= $deletedFoodPrice;
             $userCash->nett_total = $userCash->totalFoodPrice; // Update nett_total as well
             $userCash->earnPoint -= (int)($deletedFoodPrice);
         
             // Check if the values are 0 and delete the record if needed
             if ($userCash->totalFoodPrice <= 0 && $userCash->nett_total <= 0) {
                 $userCash->delete();
             } else {
                 $userCash->save();
             }
         }
         
         $paymentDetailinUserSide = PaymentDetail::where('userID', $confirmOrder->userID)->first();
         if ($paymentDetailinUserSide) {
             $paymentDetailinUserSide->totalFoodPrice -= $deletedFoodPrice;
             $paymentDetailinUserSide->nett_total = $userCash->totalFoodPrice; // Update nett_total as well
            $paymentDetailinUserSide->earnPoint -= (int)($deletedFoodPrice);
             if($paymentDetailinUserSide->totalFoodPrice <=0 && $paymentDetailinUserSide->nett_total<=0){
                $paymentDetailinUserSide->delete();
             }else{
                $paymentDetailinUserSide->save();
             }
            

         }

         $userCash2 = Payment::where([
            'food_id' => $confirmOrder->food_id,
            'food_requirement' => $confirmOrder->food_requirement,
            'quantity' => $confirmOrder->quantity,
        ])->first();
        
        if ($userCash2) {
            $userCash2->delete();
        }

        $updatedPaymentDetails = cash::all(); // Modify this query as needed

        return response()->json(['updatedPaymentDetails' => $updatedPaymentDetails]);
         
     }
     
     

}

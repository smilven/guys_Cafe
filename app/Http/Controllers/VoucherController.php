<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use App\Models\Redemption;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Carbon;

class VoucherController extends Controller
{
    public function index()
    {
        return view('voucher.index');
    }

    public function fetchvoucher()
    {
        $vouchers = Voucher::all();
        return response()->json([
            'vouchers' => $vouchers,
        ]);
    }

    

   

  
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code'=> 'required|max:191',
            'amount'=>'required|max:191',
            'type'=>'required|max:191',
            'quantity'=>'required|max:10',
            'point'=>'required|max:191',
            'expiry'=>'required|max:191',

        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else
        {
            $voucher = new Voucher;
            $voucher->code = $request->input('code');
            $voucher->amount = $request->input('amount');
            $voucher->type = $request->input('type');
            $voucher->quantity = $request->input('quantity');
            $voucher->point = $request->input('point');
            $voucher->expiry = $request->input('expiry');
            $voucher->save();
            return response()->json([
                'status'=>200,
                'message'=>'Voucher Added Successfully.'
            ]);
        }

    }



    public function storeVoucherRedemption(Request $request)
    {
        // Assuming you are using Laravel's built-in authentication, you can get the authenticated user's ID like this:
        $userID = Auth::id();
    
        // Retrieve the cart items for the current user
        // Assuming 'Voucher' is the key for the voucher ID in the request
        $voucherIds = $request->input('Voucher');
    
        // Calculate the total points required for redemption
        $totalRedemptionPoints = 0;
    
        foreach ($voucherIds as $voucherId) {
            $voucher = Voucher::find($voucherId);
            $totalRedemptionPoints += $voucher->point; // Use $voucher->point instead of $voucher->pointsRequired
        }
    
        // Retrieve the user's current points from the database
        $user = User::find($userID);
        $userPoints = $user->point;
    
        // Check if the user has enough points for redemption
        if ($userPoints >= $totalRedemptionPoints) {
            // Sufficient points, proceed with the redemption
            foreach ($voucherIds as $voucherId) {
                $voucher = Voucher::find($voucherId);
    
                // Generate a unique redemption code
                do {
                    $redemptionCode = $this->generateRedemptionCode(5);
                    $existingRedemption = Redemption::where('redemptionCode', $redemptionCode)->exists();
                } while ($existingRedemption);
    
                // Save the redemption details
                $redemption = new Redemption();
                $redemption->voucherCode = $voucher->code;
                $redemption->redemptionCode = $redemptionCode;
                $redemption->redemptionDate = Carbon::now();
                $redemption->amount = $voucher->amount;
                $redemption->userID = $userID;
                $redemption->save();
            }
    
    // Deduct the total redemption points from the user's total points
    $user->point -= $totalRedemptionPoints;
    $user->save();

    // Fetch the updated user's points from the database and return it in the response
    $updatedUser = User::find($userID);

    return response()->json([
        'status' => 200,
        'message' => 'Voucher Added Successfully.',
        'userPoints' => $updatedUser->point, // Include the updated points in the response
    ]);
}
    }
    
    private function generateRedemptionCode($length)
    {
        // Define characters to use for the redemption code
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randomString = '';
    
        // Generate the random string
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
    
        return $randomString;
    }

    public function fetchRedemptionCode()
    {
    
        $redemption = DB::table('redemptions')
    
        ->select('redemptions.*')
        ->where('redemptions.userID', '=', (int)Auth::id())
        ->get();
        return response()->json(['redemptions' => $redemption]); // Correct key name
    }

 
    
    
    



    public function edit($id)
    {
        $voucher = Voucher::find($id);
        if($voucher)
        {
            return response()->json([
                'status'=>200,
                'voucher'=> $voucher,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Voucher Found.'
            ]);
        }

    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'code'=> 'required|max:191',
            'type'=>'required|max:191',
            'amount'=>'required|max:191',
            'quantity'=>'required|max:10',
            'point'=>'required|max:191',
            'expiry'=>'required|max:191',

        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else
        {
            $voucher = Voucher::find($id);
            if($voucher)
            {
                $voucher->code = $request->input('code');
                $voucher->type = $request->input('type');
                $voucher->amount = $request->input('amount');
                $voucher->quantity = $request->input('quantity');
                $voucher->point = $request->input('point');
                $voucher->expiry = $request->input('expiry');
                $voucher->update();
                return response()->json([
                    'status'=>200,
                    'message'=>'Voucher Updated Successfully.'
                ]);
            }
            else
            {
                return response()->json([
                    'status'=>404,
                    'message'=>'No Voucher Found.'
                ]);
            }

        }
    }

    public function destroy($id)
    {
        $voucher = Voucher::find($id);
        if($voucher)
        {
            $voucher->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Voucher Deleted Successfully.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Voucher Found.'
            ]);
        }
    }
}


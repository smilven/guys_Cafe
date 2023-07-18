<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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


<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\PaymentRecord;

class ControlController extends Controller
{
    public function index()
    {
        return view('control');
    }

    public function fetchsupplier()
    {
        $suppliers = Supplier::all();
        return response()->json([
            'suppliers'=>$suppliers,
        ]);
    }


    public function show(Request $request)
    {
        $paymentDetails = PaymentRecord::all();
        return view('control', compact('paymentDetails'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'SupplierName'=> 'required|max:191',
            'PhoneNumber'=>'required|max:191',
            'Category'=>'required|max:191',
            
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
            $supplier = new Supplier;
            $supplier->SupplierName = $request->input('SupplierName');
            $supplier->PhoneNumber = $request->input('PhoneNumber');
            $supplier->Category = $request->input('Category');
            $supplier->save();
            return response()->json([
                'status'=>200,
                'message'=>'supplier Added Successfully.'
            ]);
        }

    }

    public function edit($id)
    {
        $supplier = Supplier::find($id);
        if($supplier)
        {
            return response()->json([
                'status'=>200,
                'supplier'=> $supplier,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No supplier Found.'
            ]);
        }

    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'SupplierName'=> 'required|max:191',
            'PhoneNumber'=>'required|max:191',
            'Category'=>'required|max:191',
          
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
            $supplier = Supplier::find($id);
            if($supplier)
            {
                $supplier->SupplierName = $request->input('SupplierName');
                $supplier->PhoneNumber = $request->input('PhoneNumber');
                $supplier->Category = $request->input('Category');
                $supplier->update();
                return response()->json([
                    'status'=>200,
                    'message'=>'supplier Updated Successfully.'
                ]);
            }
            else
            {
                return response()->json([
                    'status'=>404,
                    'message'=>'No supplier Found.'
                ]);
            }

        }
    }

    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        if($supplier)
        {
            $supplier->delete();
            return response()->json([
                'status'=>200,
                'message'=>'supplier Deleted Successfully.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No supplier Found.'
            ]);
        }
    } 

}

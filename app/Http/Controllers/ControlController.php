<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\PaymentRecord;
use App\Models\User;
use Illuminate\Support\Facades\DB;


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

   
  
    public function show()
    {
        $PaymentRecords = PaymentRecord::selectRaw('MONTH(created_at) as month, SUM(nett_total) as total_nett')
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->get();
    
        $labels = [];
        $data = [];
        $colors = ['#FF6384', '#36A2EB', '#FFCE56', '#8D4DDB', '#33FF99', '#FF5733', '#C70039', '#85144b', '#2F4F4F', '#FFD700', '#BA55D3', '#A52A2A'];
    
        for ($i = 1; $i <= 12; $i++) {
            $month = date('F', mktime(0, 0, 0, $i, 1));
            $total_nett = 0;
    
            foreach ($PaymentRecords as $user) {
                if ($user->month == $i) {
                    $total_nett = $user->total_nett;
                    break;
                }
            }
    
            array_push($labels, $month);
            array_push($data, $total_nett);
        }
    
        $datasets = [
            [
                'label' => 'Total Nett Amount',
                'data' => $data,
                'backgroundColor' => $colors
            ]
        ];





 // Get the food counts
 $foodCounts = Order::select('food_name', DB::raw('COUNT(food_name) as count'))
 ->groupBy('food_name')
 ->get();

$foodLabels = [];
$foodData = [];
$foodColors = ['#FF6384', '#36A2EB', '#FFCE56', '#8D4DDB', '#33FF99', '#FF5733', '#C70039', '#85144b', '#2F4F4F', '#FFD700', '#BA55D3', '#A52A2A'];

foreach ($foodCounts as $food) {
 array_push($foodLabels, $food->food_name);
 array_push($foodData, $food->count);
}

$foodDatasets = [
 [
     'label' => 'Food Counts',
     'data' => $foodData,
     'backgroundColor' => $foodColors
 ]
];

        
        $paymentDetails = PaymentRecord::all();

        return view('control', compact('datasets', 'labels', 'paymentDetails', 'foodDatasets', 'foodLabels'));
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

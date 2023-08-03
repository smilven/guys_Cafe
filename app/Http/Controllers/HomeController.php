<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\FoodMenu;
use App\Models\paymentRecord;
use App\Models\Voucher;
use App\Models\Kitchen;
use App\Models\paymentDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('kitchen');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('control');
    }

    public function showCategoryAndProduct()
    {
        $userId = auth()->user()->id;
        $data1 = Category::all();
        $data2 = FoodMenu::all();
        $data3 = Voucher::all();
        $paymentDetail = PaymentDetail::all();
        $mycarts = DB::table('mycarts')
            ->leftJoin('food_menus', 'food_menus.id', '=', 'mycarts.food_id')
            ->select('food_menus.*')
            ->where('mycarts.userID', '=', (int) Auth::id())
            ->get();
    
        $myreceipt = DB::table('payment_records')
            ->leftJoin('orders', 'orders.paymentID', '=', 'payment_records.id')
            ->select('orders.*', 'payment_records.totalFoodPrice', 'payment_records.discount', 'payment_records.nett_total', 'payment_records.earnPoint', 'payment_records.payment_method')
            ->where('payment_records.userID', '=', (int) Auth::id())
            ->get();
    
        $kitchen = Kitchen::latest()->first();
        $paymentRecords = PaymentRecord::where('userID', $userId)->get();
        $status = $kitchen ? $kitchen->food_Status : '';
    
        return view('newUI', compact('data1', 'data2', 'data3', 'mycarts', 'status', 'userId', 'paymentRecords', 'paymentDetail', 'myreceipt'));
    }

    public function destroyPaymentDetail($id)
    {
        $paymentDetail = paymentDetail::findOrFail($id);
        $paymentDetail->delete();
        return response()->json(['message' => 'paymentDetail deleted successfully']);
    }

    public function getPaymentRecords(Request $request)
    {
        $userId = auth()->user()->id;
        $paymentRecords = PaymentRecord::with('orders')->where('userID', $userId)->get();
        return response()->json(['paymentRecords' => $paymentRecords]);
    }
}

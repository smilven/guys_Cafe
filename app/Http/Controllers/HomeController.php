<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\FoodMenu;
use App\Models\mycart;
use App\Models\Voucher;
use App\Models\Kitchen;

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
     *
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

        $data1 = Category::all();
        $data2 = FoodMenu::all();
        $data3 = Voucher::all();

        $mycarts = DB::table('mycarts')
        ->leftJoin('food_menus', 'food_menus.id', '=', 'mycarts.food_id')
        ->select('food_menus.*')
        ->where('mycarts.userID', '=', (int)Auth::id())

        ->get();

        // Fetch the latest kitchen record from the database
        $kitchen = Kitchen::latest()->first();

        // Extract the food_Status from the kitchen record
        $status = $kitchen ? $kitchen->food_Status : '';

        return view('newUI', compact('data1', 'data2', 'data3', 'mycarts','status'));
    }


}

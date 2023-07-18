<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\FoodMenu;
use App\Models\Kitchen;
use Illuminate\Http\Request;


class KitchenController extends Controller
{
    public function showFood(Request $request)
    {
        $data4 = Kitchen::all();
        $user = $request->user();

        // Retrieve the cart items for the current user
        $data5 = Kitchen::where('userID', $user->id)->get();
        return view('kitchen', compact('data4', 'data5'));
    }

    public function fetchKitchenData(Request $request)
    {
        $userID = $request->input('userID');
        $foodStatus = $request->input('food_Status');

        // Find the kitchen records with the same userID
        $kitchens = Kitchen::where('userID', $userID)->get();

        // Update the food_status for each kitchen record
        foreach ($kitchens as $kitchen) {
            $kitchen->food_Status = $foodStatus;
            $kitchen->save();
        }

        return redirect()->back();
    }


    public function deleteData($userID)
    {
        // Perform the deletion based on the provided userID
        Kitchen::where('userID', $userID)->delete();

        // Redirect back or to any other page as needed
        return redirect()->back();
    }


}


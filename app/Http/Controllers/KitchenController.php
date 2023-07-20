<?php

namespace App\Http\Controllers;

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

    public function updateOrderStatus(Request $request)
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

        // Get the updated kitchen record
        $updatedKitchen = Kitchen::where('userID', $userID)->first();

        // Prepare the response with the updated card information
        $response = [
            'userID' => $updatedKitchen->userID,
            'foodStatus' => $updatedKitchen->food_Status,
        ];

        // Return the JSON response
        return response()->json($response);
    }

    public function deleteOrder(Request $request, $userID)
{
    // Perform the deletion based on the provided userID
    Kitchen::where('userID', $userID)->delete();

    // Return a success response
    return response()->json(['message' => 'Order deleted successfully']);
}




    public function getFoodStatus($userID)
    {
        $foodStatus = Kitchen::where('userID', $userID)->pluck('food_Status')->first();

        if ($foodStatus) {
            return response()->json([
                'status' => 'success',
                'foodStatus' => $foodStatus,
                'userID' => $userID
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Food status not found.'
            ], 404);
        }
    }
}

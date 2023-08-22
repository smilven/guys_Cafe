<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserRecordController extends Controller
{
    public function getDataWithTypeZero()
    {
        // Retrieve users with type 0 from the database
        $usersWithTypeZero = User::where('type', 0)->get();

        // Pass the data to the view
        return view('Admin.userAdmin', ['usersWithTypeZero' => $usersWithTypeZero]);
    }

    public function updateUser(Request $request, $id)
    {
        // Find the user by ID
        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        // Get the phone and point values from the request
        $phone = $request->input('phone');
        $point = $request->input('point');

        // Update the user record
        $user->update([
            'phone' => $phone,
            'point' => $point,
        ]);

        return response()->json(['message' => 'User updated successfully']);
    }
}

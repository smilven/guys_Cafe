<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\setting;
class SettingController extends Controller
{

    public function index()
    {
        return view('Admin.settingAdmin');
    }
    public function updateProfile(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            
        ]);
 
        # check if user profile image is null, then validate
        if (auth()->user()->profile_image == null) {
             $validate_image = Validator::make($request->all(), [
                'profile_image' => ['required', 'image', 'max:1000']
            ]);
             # check if their is any error in image validation
            if ($validate_image->fails()) {
                return response()->json(['code' => 400, 'msg' => $validate_image->errors()->first()]);
            }
        }
 
        # check if their is any error
        if ($validated->fails()) {
            return response()->json(['code' => 400, 'msg' => $validated->errors()->first()]);
        }
 
        # check if the request has profile image
        if ($request->hasFile('profile_image')) {
            $imagePath = 'storage/'.auth()->user()->profile_image;
            # check whether the image exists in the directory
            if (File::exists($imagePath)) {
                # delete image
                File::delete($imagePath);
            }
            $profile_image = $request->profile_image->store('profile_images', 'public');
        }
 
        # update the user info
        auth()->user()->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'profile_image' => $profile_image ?? auth()->user()->profile_image 
        ]);
        return response()->json(['code' => 200, 'msg' => 'profile updated successfully.']);
    }
}

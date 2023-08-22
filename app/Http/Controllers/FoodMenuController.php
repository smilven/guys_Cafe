<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodMenu;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;


class FoodMenuController extends Controller
{

    // set index page view
    public function index()
    {
        return view('Admin.foodMenuAdmin');
    }

    // handle fetch all FoodMenu ajax request
   public function fetchAll()
{
    $menus = FoodMenu::all();
    $output = '';
    if ($menus->count() > 0) {
        $output .= '<table class="table table-striped table-sm text-center align-middle" id="tableProduct">
        <thead>
          <tr>
            <th>Food ID</th>
            <th>Food Name</th>
            <th>Image</th>
            <th>Food Description</th>
            <th>Category</th>
            <th>Food Price</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>';
        foreach ($menus as $menu) {
            $output .= '<tr>
            <td>' . $menu->food_id . '</td>
            <td>' . $menu->food_name . '</td>
            <td><img src="storage/images/' . $menu->avatar . '" width="100" class="img-thumbnail"></td>
            <td>' . $menu->food_description . '</td>
            <td>' . $menu->food_category . '</td>
            <td>' . 'RM'. ''. $menu->food_price . '</td>
            <td>
            <button class="btn btn-' . ($menu->status ? 'success' : 'danger').' btn-sm statusButton" data-emp-id="' . $menu->id . '" data-emp-status="' . $menu->status . '">' . ($menu->status ? 'Available' : 'Unavailable') . '</button>
            </td>
            <td>
            <a href="#" id="' . $menu->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editFoodMenuModal"><i class="bi bi-pencil-square h4"></i></a>
            <a href="#" id="' . $menu->id . '" class="text-danger mx-1 deleteIcon"><i class="bi bi-trash h4"></i></a>
            </td>
          </tr>';
        }
        $output .= '</tbody></table>';
        echo $output;

    } else {
        echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
    }
}

    
    
    // handle insert a new FoodMenu ajax request
    public function store(Request $request)
    {
        $file = $request->file('avatar');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images', $fileName);
        $empData = ['food_id' => $request->food_id, 'food_name' => $request->food_name, 'food_description' => $request->food_description, 'food_category' => $request->food_category, 'food_price' => $request->food_price, 'avatar' => $fileName,'status' => $request->status];
        FoodMenu::create($empData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // handle edit an FoodMenu ajax request
    public function edit(Request $request)
    {
        $id = $request->id;
        $emp = FoodMenu::find($id);
        return response()->json($emp);
    }

    // handle update an FoodMenu ajax request
    public function update(Request $request)
    {
        $fileName = '';
        $emp = FoodMenu::find($request->emp_id);
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $fileName);
            if ($emp->avatar) {
                Storage::delete('public/images/' . $emp->avatar);
            }
        } else {
            $fileName = $request->emp_avatar;
        }

        $empData = ['food_id' => $request->food_id,'food_name' => $request->food_name,'food_description' => $request->food_description,'food_category' => $request->food_category,'food_price' => $request->food_price,'avatar' => $fileName];

        $emp->update($empData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // handle delete an FoodMenu ajax request
    public function delete(Request $request)
    {
        $id = $request->id;
        $emp = FoodMenu::find($id);
        if (Storage::delete('public/images/' . $emp->avatar)) {
            FoodMenu::destroy($id);
        }
    }
    
    public function updateStatus(Request $request)
    {
        $emp = FoodMenu::find($request->emp_id);
        $emp->status = $request->status;
        $emp->save();
    
        return response()->json([
            'status' => 200,
        ]);
    }
    public function toggleStatus($foodId)
    {
        $status = request('status');
        $newStatus = $status == 1 ? 0 : 1;
        $food = FoodMenu::find($foodId);
        $food->status = $newStatus;
        $food->save();
        return response()->json([
            'status' => true,
            'newStatus' => $newStatus,
        ]);
    }
    public function fetchCategories()
{
    $categories = Category::all();
    return response()->json([
        'categories' => $categories,
        
    ]);
    
}
}

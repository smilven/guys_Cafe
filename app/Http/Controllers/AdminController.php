<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\FoodMenu;
use App\Models\Worker;
use App\Models\Category;
use App\Models\PaymentRecord;

use App\Models\Employee;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    public function Category()
    {
        return view('Admin.supplierAdmin');
    }



 

   //这边show upload food后  在admin page
   public function fetchcategory()
   {
      $categories = Category::all();

      return response()->json([
           'categories' => $categories,
       ]);
   }
      //这边create category 的再admin page
      function addCategory(Request $request)
      {
          $validator = Validator::make($request->all(), [
              'food_category'=> 'required|max:191',


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
              $category = new Category();
              $category->food_category = $request->input('food_category');
              $category->save();
              return response()->json([
                  'status'=>200,
                  'message'=>'supplier Added Successfully.'
              ]);
          }

      }

    //这边editCategory
   public function editCategory($id)
   {
       $categories = Category::find($id);
       if($categories)
       {
           return response()->json([
               'status'=>200,
               'categories'=> $categories,
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
 //这边updateCategory
   public function updateCategory(Request $request, $id)
   {
       $validator = Validator::make($request->all(), [
           'food_category'=> 'required|max:191',


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
           $categories = Category::find($id);
           if($categories)
           {
               $categories->food_category = $request->input('food_category');
               $categories->update();
               return response()->json([
                   'status'=>200,
                   'message'=>'Category Updated Successfully.'
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



       //这边deleteCategory
       function deleteCategory($id)
       {
          $categories = Category::find($id);
          if($categories){
           $categories->delete();
           return response()->json([
               'status'=>200,
               'message'=>'Categories deleted successfully',
           ]);
          }
          else{
           return response()->json([
               'status'=>404,
               'message'=>'No category found',
           ]);
          }
       }






/*================================================这边原本是store的 变 store 2====================================================*/
    //这边create food 的再admin page












/*=================================================================================*/

 



}

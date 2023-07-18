<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Table;
class TableController extends Controller
{
    public function indexTable()
    {
        return view('setTable');
    }
    
        public function fetchTables()
        {
            $tables = Table::all();
            return response()->json([
                'tables' => $tables,
            ]);
        }
    
        //这边create table 的再admin page
        public function CreateTable(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'TableNumber'=> 'required|numeric|max:191',
              
                
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
                $table = new Table();
                $table->TableNumber = $request->input('TableNumber');
                $table->save();
                return response()->json([
                    'status'=>200,
                    'message'=>'supplier Added Successfully.'
                ]);
            }
    
        }
    
     
        //这边delete create料的table 的再admin page
        function DeleteTable($id)
        {
            $TableNum = Table::find($id);
            $TableNum->delete();
            return redirect('table');
        }
}

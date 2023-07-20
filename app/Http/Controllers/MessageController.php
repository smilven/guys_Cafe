<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function message()
    {
        $messages = Message::all();
        return view('humanresource', ['messages' => $messages]);
    }

    public function smessage(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $newMessage = Message::create($data);

        return response()->json([
            'status' => 200,
            'message' => $newMessage,
        ]);
    }

    public function edit($id)
    {
        $message = Message::find($id);
        return response()->json([
            'status' => 200,
            'message' => $message,
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $message = Message::find($id);
        $message->title = $request->input('title');
        $message->body = $request->input('body');
        $message->save(); 

        return response()->json([
            'status' => 200,
            'message' => $message,
        ]);
        
    }


    public function destroy(Request $request)
    {
        $id = $request->input('delete_id');
        $message = Message::find($id);
        $message->delete();

        return response()->json([
            'status' => 200,
            'message' => $message,
        ]);
    }

}
<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function get(Message $message)
    {
        return $message->getAllAfterTimestamp(0);
    }


    public function add(Request $request)
    {
        // get user from the request
        $user = $request->user();
        // get message from the request
        $message = $request->input('msg');
        // message must .....
        // TODO (hard part)
        // if message is empty or null
        if (empty($message)) {
            return response()->json([
                'status' => 'error',
                'msg' => 'message is empty'
            ], 400);
        }

        // add message to the user
        $user->messages()->create([
            'msg' => $message,
        ]);

        return response()->json([
            'status' => 'success',
            'msg' => 'message added'
        ], 200);
    }
}

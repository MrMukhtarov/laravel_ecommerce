<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function Create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'string|max:255|nullable',
            'email' => 'string|required|max:255|email',
            'phone' => 'string|max:255|nullable',
            'message' => 'string|required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            Message::create([
                "name" => $request->name,
                'email' => $request->email,
                'message' => $request->message,
                'phone' => $request->phone
            ]);
            return redirect('/')->with("success", "message sent successfully");
        } catch (\Error $e) {
            return redirect()->back()->with("error", "Message sent ivalid for some reason " . $e->getMessage());
        }
    }
}

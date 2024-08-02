<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function create(Request $request)
    {
        $userId = null;
        if (Auth::check() && Auth::user()) {
            $userId = Auth::user()->id;
        }
        $validate = Validator::make($request->all(), [
            'review' => 'string|required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        try {
            Comment::create([
                "review" => $request->review,
                'rating' => $request->rating,
                'user_id' => $userId,
                "product_id" => $request->product_id
            ]);
            return redirect()->back()->with('success');
        } catch (\Error $e) {
            return redirect()->back()->with("error", "Rewview failed some reason " . $e->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            $userId = null;
            if (Auth::check() && Auth::user()) {
                $userId = Auth::user()->id;
            }
            $comment = Comment::find($id);
            if($comment->user_id == $userId){
                $comment->delete();
            }
            return redirect()->back()->with("success");
        } catch (\Error $e) {
            return redirect()->back()->with("error", "Delete invalid for some reason " . $e->getMessage());
        }
    }
}

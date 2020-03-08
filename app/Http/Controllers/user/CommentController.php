<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function comment(Request $request){
        $comment = new Comment;
        $comment->content = $request->noidung;
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $request->post_id;
        $comment->created_at = now();
        $comment->save();
        return redirect()->back();
    }
}

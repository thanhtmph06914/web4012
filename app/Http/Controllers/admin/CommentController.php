<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        $comment = Comment::all();
        return view('admin/comments/list',['comment'=>$comment]);
    }
    public function update($id){
        $comment = Comment::find($id);
        if ($comment->is_active === 1){
            $comment->is_active = 2;
            $comment->save();
            return redirect()->back();
        }else{
            $comment->is_active = 1;
            $comment->save();
            return redirect()->back();
        }
    }
}

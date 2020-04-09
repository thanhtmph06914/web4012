<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function add(Request $request){
        $this->validate($request,
            [
                'title'=>'required',
                'noidung'=>'required',
            ],
            [
                'title.required'=>'Nhap Tieu De',
                'noidung.required'=>'Nhap Noi Dung'
            ]);
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->noidung;
        $post->category_id = $request->category_id;
        $post->user_id = Auth::user()->id;
        $post->save();
        return redirect()->back();
    }
    public function editForm($id){
        $post = Post::find($id);
        $category = Category::all();
        return view('user/edit',['post'=>$post],['category'=>$post]);
    }
    public function edit(Request $request){
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->noidung;
        $post->category_id = $request->category_id;
        $post->user_id = Auth::user()->id;
        $post->save();
        return redirect()->back();
    }
    public function post($id){
        $comment = Comment::where('post_id','=',$id)->where('is_active','=',1)->get();
        $post = Post::find($id);
        return view('user/postDetail',['post'=>$post],['comment'=>$comment]);
    }
    public function delete($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }
}

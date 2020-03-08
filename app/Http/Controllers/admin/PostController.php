<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
        $post = Post::all();
        return view('admin/post/list',['post'=>$post]);
    }

    public function delete($id){
        $post = Post::find($id);
        $post->delete();
    }
}

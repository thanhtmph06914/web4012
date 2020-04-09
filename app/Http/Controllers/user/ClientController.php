<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class ClientController extends Controller
{
    public function index(){
        $category = Category::all();
        $post = Post::all();
        return view('user/client',['category'=>$category],['post'=>$post]);
    }
    public function wall($id){

        $post = Post::all()->where('user_id','=',$id);
        return view('user/wall',['post'=>$post]);
    }
}

<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $category = Category::all();
        $post = Post::all();
        return view('user/client',['category'=>$category],['post'=>$post]);
    }
}

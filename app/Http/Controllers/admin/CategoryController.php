<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('admin/category/list',['category'=>$category]);
    }
    public function addForm(){

        return view('admin/category/add');
    }
    public function add(Request $request){
        $this->validate($request,['category_name'=>'required','unique:categories.category_name'],
            ['category_name.required'=>'Nhap ten',
                'category_name.unique'=>'tentrung'
                ]);
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->user_id = Auth::user()->id;
        $category->save();
        return redirect('/admin/category');
    }
    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }
    public function editForm($id){
        $category = Category::find($id);
        return view('/admin/category/edit',['category'=>$category]);
    }
    public function edit($id,Request $request){
        $this->validate($request,['category_name'=>'required','unique:categories.category_name'],
            ['category_name.required'=>'Nhap ten',
                'category_name.unique'=>'tentrung'
            ]);
        $category = Category::find($id);
        $category->category_name = $request->category_name;
        $category->user_id = Auth::user()->id;

        $category->save();
        return redirect('/admin/category');
    }
}

@extends('layouts/app')
@section('content')
    <form class="form-inline" action="/admin/category/edit/{{$category->id}}" method="post">
        @csrf
        <div class="form-group mb-2">
            <input type="text" readonly class="form-control-plaintext" value="Category name">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <input type="text" name="category_name" value="{{$category->category_name}}">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Edit category</button>
    </form>
@endsection

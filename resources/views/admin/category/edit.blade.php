
@extends('layouts/app')
@section('content')

    <form action="/admin/category/edit/{{$category->id}}" method="post">
        @csrf
        <input type="text" name="category_name" value="{{$category->category_name}}">
        <input type="submit" value="Sub">
    </form>
@endsection

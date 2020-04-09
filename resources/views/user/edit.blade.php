@extends('welcome')
@section('content')
    <div class="thembaiviet">
        <form action="/edit" method="POST">
            @csrf
            <lable>Title</lable>
            <input type="text" name="title" value="{{$post->title}}">
            <lable>Content</lable>
            <input type="text" name="noidung" value="{{$post->content}}">
            <select name="category_id" id="">
                @foreach($category as $item)
                    <option value="{{$post->category->id}}">{{$post->category->category_name}}</option>
                    <option value="{{$post->id}}">{{$post->category_name}}</option>
                @endforeach
            </select>
            <input type="submit" value="submit">
        </form>
    </div>
@endsection

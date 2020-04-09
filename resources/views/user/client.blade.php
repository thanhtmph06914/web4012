@extends('welcome')
@section('content')
    <div class="thembaiviet">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/add-post" method="POST">
            @csrf
            <lable>Title</lable>
            <input type="text" name="title">
            <lable>Content</lable>
            <input type="text" name="noidung">
            <select name="category_id" id="">
                @foreach($category as $item)
                <option value="{{$item->id}}">{{$item->category_name}}</option>
                @endforeach
            </select>
            <input type="submit" value="submit">
        </form>
    </div>
    <div>
        @foreach($post as $item)
            <div>
                <p>{{$item->user->name}} </p>
                <p><a href="/post-detail/{{$item->id}}">{{$item->title}}</a></p>
                <p>{{$item->category->category_name}}</p>
                <p>{{$item->content}}</p>
                @if(Auth::user()->id=== $item->user_id || Auth::user()->role === 1)
                    <a href="/delete-post/{{$item->id}}">Delete</a>
                @endif
                @if(Auth::user()->id === $item->user_id)
                    <a href="/edit-post/{{$item->id}}">Edit</a>
                @endif
            </div>
            @endforeach
    </div>
    @endsection

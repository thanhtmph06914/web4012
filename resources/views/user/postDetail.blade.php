@extends('welcome')
@section('content')

    <div>

            <div>
                <p>{{$post->user->name}}</p>
                <p>{{$post->title}}</p>
                <p>{{$post->category->category_name}}</p>
                <p>{{$post->content}}</p>
                @if(Auth::user()->id === $post->user_id || Auth::user()->role === 1)
                    <a href="/delete-post/{{$post->id}}">Delete</a>
                @endif
                @if(Auth::user()->id === $post->user_id)
                    <a href="/edit-post/{{$post->id}}">Edit</a>
                @endif
            </div>

    </div>
    <hr>
    <div>

        @foreach($comment as $item)
            <p>{{$item->user->name}}</p>
            <p>{{$item->content}}</p>
            @if(Auth::user()->id=== $item->user_id || Auth::user()->role === 1)
                <a href="/delete-comment/{{$item->id}}">Delete</a>
            @endif
            @endforeach

    </div>
    <form action="/comment" method="POST">
        @csrf
        <input type="hidden" name="post_id" value="{{$post->id}}">
        <lable>content</lable>
        <input type="text" name="noidung">

        <input type="submit" value="submit">
    </form>
@endsection

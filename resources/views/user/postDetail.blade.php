@extends('welcome')
@section('content')

    <div>

            <div>
                <p>{{$post->user->name}}</p>
                <p>{{$post->title}}</p>
                <p>{{$post->category->category_name}}</p>
                <p>{{$post->content}}</p>
            </div>

    </div>
    <hr>
    <div>

        @foreach($comment as $item)
            <p>{{$item->user->name}}</p>
            <p>{{$item->content}}</p>
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

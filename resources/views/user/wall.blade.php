@extends('welcome')
@section('content')

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


@extends('welcome')
@section('content')
    <div class="container">
        <div>
            <div>
                <h2 class="text-center">{{$post->title}}</h2>
                <div class="d-flex justify-content-center" style="margin: 30px 0">
                    <span>{{$post->user->name}}</span>
                    <span style="margin: 0 10px">-</span>
                    <span>{{$post->category->category_name}}</span>
                </div>
                <img src="https://photo2.tinhte.vn/data/attachment-files/2020/04/4966477_Cover_Xe_Tinhte_fourringschallenge.jpg" class="w-100">
                <p style="margin-top: 50px">{{$post->content}}</p>
{{--                @if(Auth::user()->id === $post->user_id || Auth::user()->role === 1)--}}
{{--                    <a href="/delete-post/{{$post->id}}">Delete</a>--}}
{{--                @endif--}}
{{--                @if(Auth::user()->id === $post->user_id)--}}
{{--                    <a href="/edit-post/{{$post->id}}">Edit</a>--}}
{{--                @endif--}}
            </div>
        </div>
        <hr>
        <h3>Leave your comment</h3>
        <form action="/comment" method="POST">
            @csrf
            <input type="hidden" name="post_id" value="{{$post->id}}">
            <div class="form-group">
                <textarea class="form-control" rows="5" name="noidung"></textarea>
            </div>
            <input class="btn btn-success" type="submit" value="Comment">
        </form>
        <hr style="margin-top: 50px">
        <h3>Comments</h3>
        <div style="padding: 15px 30px 0">
            @foreach($comment as $item)
                <h5>{{$item->user->name}}</h5>
                <p>{{$item->content}}</p>
                <hr>
            @endforeach
        </div>
    </div>
@endsection

@extends('welcome')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap">
            @foreach($post as $item)
            <div class="card" style="width:30%">
                <img class="card-img-top" src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/61764145_2350990011782716_2372372787068141568_o.jpg?_nc_cat=104&_nc_sid=09cbfe&_nc_ohc=88XWLOTufNEAX-hhhaK&_nc_ht=scontent.fhan2-4.fna&oh=d65472f9400aa07b3bbbca1b194abffb&oe=5EB44EB5" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title"><a href="/post-detail/{{$item->id}}">{{$item->title}}</a></h4>
                    <i>User: </i>{{$item->user->name}}
                    <br>
                    <i>Category: </i>{{$item->category->category_name}}
                    <p class="card-text" style="margin-top: 30px">{{$item->content}}</p>
                    <div class="d-flex justify-content-between">
                        @if(Auth::user()->id === $item->user_id)
                            <a href="/edit-post/{{$item->id}}" class="btn btn-primary" style="min-width: 47%">Edit</a>
                        @endif
                        @if(Auth::user()->id=== $item->user_id || Auth::user()->role === 1)
                            <a href="/delete-post/{{$item->id}}" class="btn btn-danger" style="min-width: 47%">Delete</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <br><br><hr><br>
        <h2>ADD NEW POST</h2>
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
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea class="form-control" name="noidung" rows="3"></textarea>
                </div>
                <label>Category</label>
                <select class="form-control" name="category_id" id="">
                    @foreach($category as $item)
                        <option value="{{$item->id}}">{{$item->category_name}}</option>
                    @endforeach
                </select>
                <br>
                <input type="submit" value="Submit" class="btn btn-success" style="min-width: 100px">
            </form>
        </div>
    </div>
@endsection

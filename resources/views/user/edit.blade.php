@extends('welcome')
@section('content')
    <div class="thembaiviet">
        <form action="user/edit-post" method="POST">
            @csrf
            <lable>Title</lable>
            <input type="text" name="title">
            <lable>Content</lable>
            <input type="text" name="content">
            <select name="category_id" id="">
                @foreach($category as $item)
                    <option value="{{$item->id}}">{{$item->category_name}}</option>
                @endforeach
            </select>
            <input type="submit" value="submit">
        </form>
    </div>
@endsection

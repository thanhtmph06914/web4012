@extends('layouts.app')
@section('content')
    <table>
        <tr>
            <th>Nguoi Dang</th>
            <th>Category</th>
            <th>Title</th>
            <th>Content</th>
            <th></th>
        </tr>
        <tr>
            @foreach($post as $item)
            <td>{{$item->user->name}}</td>
            <td>{{$item->category->category_name}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->content}}</td>
            <td><a href="/admin/delete/{{$item->id}}">Delete</a></td>
                @endforeach
        </tr>
    </table>
    @endsection

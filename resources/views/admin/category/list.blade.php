@extends('layouts/app')
@section('content')
    <table>
        <tr>
            <th>Name</th>
        </tr>
        <tr>
            @foreach($category as $item)
                <td>{{$item->category_name}}</td>
                <td><a href="/admin/category/delete/{{$item->id}}">Delete</a></td>
                <td><a href="/admin/category/edit-cate/{{$item->id}}">Edit</a></td>
                @endforeach
        </tr>
    </table>
@endsection

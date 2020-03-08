@extends('layouts.app')
@section('content')
    <table>
        <tr>
            <th>Nguoi Dang</th>
            <th>content</th>

            <th></th>
        </tr>
        <tr>
            @foreach($comment as $item)
                <td>{{$item->user->name}}</td>
                <td>{{$item->content}}</td>
            @if($item->is_active ===1)
                <td><a href="/admin/update-comment/{{$item->id}}">Hide</a></td>
                @else
                    <td><a href="/admin/update-comment/{{$item->id}}">Show</a></td>
                @endif
            @endforeach
        </tr>
    </table>
@endsection

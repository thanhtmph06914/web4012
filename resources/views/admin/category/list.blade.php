@extends('layouts/app')
@section('content')
    <table>
        <tr>
            <th>Name</th>
        </tr>
        <tr>
            @foreach($category as $item)
                <td>{{$item->category_name}}</td>
                @endforeach
        </tr>
    </table>
@endsection

@extends('layouts/app')
@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="admin/post/add" method="post">
        @csrf

        <input type="text" name="category_name">
        <input type="text" name="category_name">
        <input type="text" name="category_name">
        <input type="submit" value="Sub">
    </form>
@endsection

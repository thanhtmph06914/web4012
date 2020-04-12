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
    <form class="form-inline" action="/admin/category/add" method="post">
        @csrf
        <div class="form-group mb-2">
            <input type="text" readonly class="form-control-plaintext" value="Category name">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <input type="text" name="category_name">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Add category</button>
    </form>
@endsection

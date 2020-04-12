@extends('layouts/app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center position-relative">
                    <h3 class="card-title text-uppercase">Categories table</h3>
                    <a href="http://127.0.0.1:8000/admin/category/add-cate" class="btn btn-primary position-absolute" style="right: 15px">Add new category +</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th style="width: 80%">Category name</th>
                            <th colspan="2">Function</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr @foreach($category as $item)>
                            <td>{{$item->category_name}}</td>
                            <td><a href="/admin/category/delete/{{$item->id}}">Delete</a></td>
                            <td><a href="/admin/category/edit-cate/{{$item->id}}">Edit</a></td>
                        </tr @endforeach>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

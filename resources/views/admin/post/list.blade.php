@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Responsive Hover Table</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>User</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Function</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr @foreach($post as $item)>
                            <td>{{$item->user->name}}</td>
                            <td>{{$item->category->category_name}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->content}}</td>
                            <td><a href="/admin/delete/{{$item->id}}">Delete</a></td>
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

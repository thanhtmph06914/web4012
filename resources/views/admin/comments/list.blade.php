@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center position-relative">
                    <h3 class="card-title text-uppercase">Comments table</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>User</th>
                            <th style="width: 60%">Comment</th>
                            <th colspan="2">Function</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr @foreach($comment as $item)>
                            <td>{{$item->user->name}}</td>
                            <td>{{$item->content}}</td>
                            @if($item->is_active ===1)
                                <td><a href="/admin/update-comment/{{$item->id}}">Hide</a></td>
                            @else
                                <td><a href="/admin/update-comment/{{$item->id}}">Show</a></td>
                            @endif
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

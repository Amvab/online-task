@extends('layout')
@section('title')Task Manage @endsection

@section('content')
    <div class="col-md-12" style="background-color: white">

        <div class="panel-body">
            <a href="{{route('task.create')}}" class="btn btn-xs btn-success btn-flat" style="margin-bottom: 5px;">
                <i class="fa fa-plus"></i>Create
            </a>&nbsp;
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Short Description</th>
                    <th>Created Date</th>
                    <th>Expiry Date</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                    @if(count($tasks)>0)
                        @foreach($tasks as $key=>$task)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$task->title}}</td>
                                <td>{{$task->description}}</td>
                                <td>{{$task->created_at}}</td>
                                <td>{{$task->expiry_date}}</td>
                                <td><a href="{{route('task.edit',['id'=>$task->id])}}"
                                       class="btn btn-xs btn-primary"></i>
                                        Edit</a>&nbsp;
                                    <a href="{{route('task.destroy',['id'=>$task->id])}}"
                                       class="btn btn-xs btn-danger"
                                       onclick="return confirm('Are you sure want to delete ??')"> </i>delete</a>&nbsp;
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">Empty Task List</td>
                        </tr>
                    @endif

                    </tbody>
                    <tfoot></tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection

@extends('app')
@section('title', 'Task / Index')
@section('main-content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Title</th>
                    <th scope="col">Time</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$task->title}}</td>
                    <td>{{$task->time}}</td>
                    <td>{{$task->status}}</td>
                    <td>
                        <a name="" id="" class="btn btn-primary" href="#" role="button">Edit</a>
                        <a name="" id="" class="btn btn-success" href="#" role="button">View</a>
                        <a name="" id="" class="btn btn-danger" href="#" role="button">Delete</a>

                    </td>
                </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

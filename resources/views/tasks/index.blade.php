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
                        <a name="" id="" class="btn btn-primary" href="{{route('edit',$task->id)}}" role="button">Edit</a>
                        <a name="" id="" class="btn btn-success" href="{{route('view',$task->id)}}" role="button">View</a>
                        {{-- <a name="" id="" class="btn btn-danger" href="#" role="button">Delete</a> --}}
                        <form action="{{route('delete',$task->id)}}" class="d-inline-block" onsubmit="return confirm('Are you sure?')" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </td>
                </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

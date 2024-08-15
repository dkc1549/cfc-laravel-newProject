@extends('app')
@section('title', 'Task / Index')
@section('main-content')
<h1 class="text-center text-primary">View page</h1>
    <div class="container">

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" value="{{$task->title}}">
        </div>
        <div class="mb-3">
            <label for="time" class="form-label">Time</label>
            <input type="time" class="form-control" name="time" value="{{$task->time}}" id="time">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" value="{{($task->status)?"Competed":"Incomplete"}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea  id="" class="form-control" name="description" cols="30" rows="10">{{$task->description}}

            </textarea>
        </div>
    </div>
@endsection

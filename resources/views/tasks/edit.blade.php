@extends('app')
@section('title', 'Task / Edit')
@section('main-content')
    <div class="container">
        <form action="{{ route('update',$task->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" value="{{$task->title}}">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Time</label>
                <input type="time" class="form-control" name="time" id="time" value="{{$task->time}}">
                @error('time')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" aria-label="Default select example">
                    <option {{($task->status == 0)?"Selected":""}} value="0">InComplete</option>
                    <option {{($task->status == 1)?"Selected":""}} value="1">Complete</option>
                </select>
                @error('status')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="" class="form-control" name="description" cols="30" rows="10">{{$task->description}}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

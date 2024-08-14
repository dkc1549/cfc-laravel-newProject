@extends('app')
@section('title',"Task / Create")
@section('main-content')
    <div class="container">
        <form action="" method="post">
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="email" class="form-control" id="title" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="time" class="form-label">Time</label>
                  <input type="password" class="form-control" id="time">
                </div>
                <div class="mb-3">
                    <label for="time" class="form-label">Status</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="0">InComplete</option>
                        <option value="1">Complete</option>
                      </select>
                </div>
                <div class="mb-3">
                    <label for="time" class="form-label">Description</label>
                    <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
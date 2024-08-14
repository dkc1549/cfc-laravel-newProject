<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view("tasks.index",compact("tasks"));
    }

    public function create(){
        return view("tasks.create");
    }

    public function view(){
        return view("tasks.view");
    }
    public function store(Request $request){
        $request->validate([
            "title" => "required",
            "time" => "required",
            "status" => "required",
        ]);

        $task = new Task();
        $task->title = $request->title;
        $task->time = $request->time;
        $task->status = $request->status;
        $task->description = $request->description;
        $task->save();
        return redirect()->route('index');
    }
}

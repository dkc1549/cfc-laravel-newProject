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

    public function view($id){
        $task = Task::find($id);
        return view("tasks.view",compact('task'));
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
    public function edit($id){
        $task = Task::find($id);
        return view('tasks.edit',compact('task'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title'=> 'required',
            'time'=> 'required',
            'status'=> 'required',
        ]);
        $task = Task::find($id);
        $task->title = $request->title;
        $task->time = $request->time;
        $task->status = $request->status;
        $task->description = $request->description;
        $task->save();
        return redirect()->route('index');
    }

    public function destroy($id){
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('index');
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('task',[Taskcontroller::class,'index'])->name('index');
Route::get('task/create',[Taskcontroller::class,'create'])->name('create');
Route::get('task/view',[Taskcontroller::class,'view'])->name('view');
Route::post('task/store',[TaskController::class,'store'])->name('store');
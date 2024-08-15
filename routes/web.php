<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('task',[Taskcontroller::class,'index'])->name('index');
Route::get('task/create',[Taskcontroller::class,'create'])->name('create');
Route::get('task/view/{id}',[Taskcontroller::class,'view'])->name('view');
Route::post('task/store',[TaskController::class,'store'])->name('store');
Route::get("task/edit/{id}",[TaskController::class,"edit"])->name('edit');

Route::put("task/update/{id}",[TaskController::class,"update"])->name("update");
Route::delete("task/delete/{id}",[TaskController::class,'destroy'])->name('delete');
<?php

namespace App\Http\Controllers;

use App\Task;

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks = \App\Task::all();
        return view('tasks.index', compact('tasks'));
    }
    public function show($id){
        $task = Task::find($id);
        return view('tasks.show', compact('task'));
    }

}

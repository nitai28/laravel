<?php

Route::get('/posts','PostsController@index');
Route::get('/posts/create','PostsController@create');
Route::post('/posts/create','PostsController@store');
//Route::get('/posts/{post}','PostsController@show');






//this @function return us all the data from the table with the controller
//Route::get('/tasks', 'TaskController@index');
//Route::get('/tasks/{task}', 'TaskController@show');

//this @function return us all the data from the table without the controller
//Route::get('/tasks', function () {
////    $tasks = DB::table('tasks')->get();
//    $tasks = \App\Task::all();
//    return view('tasks.index', compact('tasks'));
//});

//Route::get('/tasks/{task}', function ($id) {
////    $task = DB::table('tasks')->find($id);
//    $task = Task::find($id);
//    Task::incomplete()->get();
//    return view('tasks.show', compact('task'));
//});

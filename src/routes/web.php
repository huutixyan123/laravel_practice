<?php

use App\Task;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('tasks');
});

Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    //TODO: Add New Task
    $task = new Task;
    $task->name = $request->name;
    $task->save();




});

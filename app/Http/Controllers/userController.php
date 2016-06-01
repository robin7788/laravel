<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
    function showProfile(){
        $tasks = Task::orderBy('created_at', 'asc')->get();

        return view('task.tasks', [
            'tasks' => $tasks
        ]);
    }

    function profileCheck(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/task')
                ->withInput()
                ->withErrors($validator);
        }

        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return redirect('/task');
    }

    function deleteProfile(Task $task){
        $task->delete();

        return redirect('/task');
    }
}

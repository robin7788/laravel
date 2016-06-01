<?php

use App\Task;
use App\Http\Requests\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function(){
    return view('task.tasks');
});
Route::post('/task', function(Request $request){
    return "Hello";
});
Route::delete('/task/{task}', function(Task $task){
    return "Hello";
});

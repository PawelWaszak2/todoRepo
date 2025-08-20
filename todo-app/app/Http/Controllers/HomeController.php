<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function getAllTasks(){
        return view('show_tasks')->with('tasks', Task::all());
    }
    public function getOneTask(){

    }
    public function createTask(){
        return view('add_task');
    }
    public function sendTask(request $request){

        $task = New Task();

        $task->name = $request->input('name');
        $task->description = $request->input('description');
        $task->realization_time = $request->input('realization_time');
        $task->status = 1;
        $task->save();
        return redirect('/home');
    }
    public function editTask($id){
        $task = Task::findOrFail($id);
        return view('edit_task', compact('task'));
    }
    public function updateTask(request $request, $id){
        $task = Task::findOrFail($id);
        $task->name = $request->input('name');
        $task->description = $request->input('description');
        $task->realization_time = $request->input('realization_time');
        $task->save();
    return redirect('/tasks');

    }
    public function deleteTask(){

    }
}

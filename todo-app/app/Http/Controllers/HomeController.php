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
    public function updateTask(){

    }
    public function deleteTask(){

    }
}

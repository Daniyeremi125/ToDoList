<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;

class TasksController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $tasks = Tasks::all();
        return view('Tasks.index',compact('tasks'));
    }

    public function create (){
        return view('Tasks.create');
    }

    public function sendData(Request $request){

        
        $tasks = new Tasks();
        $tasks->name = $request->input('name');
        $tasks->description = $request->input('description');
        $tasks->save();

        return redirect('tareas');
    }

    public function edit(Tasks $tasks){
        return view('Tasks.edit',compact('tasks'));
    }
    public function update(Request $request, Tasks $tasks){

        
        
        $tasks->name = $request->input('name');
        $tasks->description = $request->input('description');
        $tasks->save();

        return redirect('tareas');
    }

    public function destroy(Tasks $tasks){
        $tasks->delate();
        return redirect('tareas');
    }
}

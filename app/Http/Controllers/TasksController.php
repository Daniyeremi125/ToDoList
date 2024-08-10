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

    public function index()
    {
        $tasks = Tasks::all();
        return view('Tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('Tasks.create');
    }

    public function sendData(Request $request)
    {
        $task = new Tasks();
        $task->name = $request->input('name');
        $task->description = $request->input('description');
        $task->save();

        return redirect('tareas');
    }

    public function edit(Tasks $task)
    {
        return view('Tasks.edit', compact('task'));
    }

    public function update(Request $request, Tasks $task)
    {
        $task->name = $request->input('name');
        $task->description = $request->input('description');
        $task->save();

        return redirect('tareas');
    }

    public function destroy(Tasks $task)
    {
        $task->delete(); // Corregir "delate" a "delete"
        return redirect('tareas');
    }
}
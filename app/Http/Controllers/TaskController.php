<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $task = Task::all();
        return $task;
    }

    public function store(Request $request)
    {
        $task = new Task();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->content = $request->content;

        $task->save();

        return $task;

    }

    public function show(Request $request)
    {
        $task = Task::findOrFail($request->id);
        return $task;

    }

    public function update(Request $request)
    {
        $task = Task::findOrFail($request->id);

        $task->name = $request->name;
        $task->description = $request->description;
        $task->content = $request->content;

        $task->save();

        return $task;
       
    }

    public function destroy(Request $request)
    {
        $task = Task::destroy($request->id);
        return $task;

    }
}

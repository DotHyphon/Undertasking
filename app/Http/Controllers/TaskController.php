<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::orderBy('due_date', 'asc')->where('completed', false)->filter(request(['search']))->get()
        ]);
    }

    public function show()
    {
        return view('tasks.show', [
            'task' => Task::findOrFail(request('task'))
        ]);
    }


}

<?php

namespace WrightWayWeb\Http\Controllers;

use Illuminate\Http\Request;
use WrightWayWeb\Task;
use Auth;
use DB;

class TasksController extends Controller
{
    public function index($message = '')
    {
        $tasks = DB::table('tasks')->where([
            ['user_id', Auth::user()->id],
            ['completed', 0]
            ])->get();

        return view('tasks.index', compact('tasks', 'message'));
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function addTask()
    {
        $newtask          = new Task;
        $newtask->user_id = Auth::user()->id;
        $newtask->body    = request('body');
        $newtask->title   = request('title');

        $newtask->save();

        return $this->index("Successfully added {$newtask->title}");
    }

    public function completed()
    {
        $task            = (new Task)->where('id', request('task_id'))->first();
        $task->completed = 1;
        $task->save();

        return $this->index("Successfully marked task {$task->title} as completed");
    }
}

<?php

namespace WrightWayWeb\Http\Controllers;

use Illuminate\Http\Request;
use WrightWayWeb\Task;
use Auth;
use DB;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = DB::table('tasks')->where([
            ['user_id', Auth::user()->id],
            ['completed', 0]
            ])->get();

        return view('tasks.index', compact('tasks'));
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

        echo <<<JavaScript
<script>
    window.alert('Task Successfully Added')
    window.location.href='/tasks'
</script>
JavaScript;
    }

    public function completed()
    {
        $task_id = request('task_id');

        DB::table('tasks')->where('id', $task_id)->update(['completed' => 1]);

        echo <<<JavaScript
<script>
    window.alert('Task Marked as Complete')
    window.location.href='/tasks'
</script>
JavaScript;
    }
}

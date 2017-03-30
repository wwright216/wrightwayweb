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
		//Creates new task
		$newtask = new Task;
		$newtask->user_id = Auth::user()->id;
		$newtask->body = request('body');
		$newtask->title = request('title');
		//Saves task to dB
		$newtask->save();
		echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Task Successfully Added')
        window.location.href='/tasks'
        </SCRIPT>");
	}
	public function completed()
	{
		$task_id = request('task_id');
		DB::table('tasks')->where('id', $task_id)->update(['completed' => 1]);
		echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Task Marked as Complete')
        window.location.href='/tasks'
        </SCRIPT>");
	}
}
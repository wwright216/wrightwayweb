@extends('layouts.app')
@section('content')
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
			<h4><u>Task</u>:</h4>
			<p>{{ $task->title }}</p>
			<h4><u>Description</u>:</h4>
			<p>{{ $task->body }}</p>
		<br>
		<form action="/tasks/completed" method="POST">
		{{ csrf_field() }}
		<input type="hidden" name="task_id" value="{{ $task->id }}">
		<button type="submit" class="btn btn-success btn-lg">Mark As Completed!</button>
		</form>
		<br>
		<br>
		<a href="/tasks">View All Tasks</a>

		</div>
@endsection
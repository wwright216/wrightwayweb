@extends('layouts.app')
@section('content')
<header>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->name }} Tasks</div>

                <div class="panel-body" style="color: black;">
                    <p>Welcome back, {{ Auth::user()->name }}!</p>
                    <ul>
                        @foreach ($tasks as $task)
                            <li align="left"><a href="/tasks/{{ $task->id }}"> {{ $task->body }} </a></li>
                        @endforeach
                    </ul>
                    <div class="clearfix">
                        <button onclick="window.location.href='/tasks/add'" class="btn btn-success">Add Task</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
@endsection
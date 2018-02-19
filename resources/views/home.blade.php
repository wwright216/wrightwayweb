@extends('layouts.app')

@section('content')
<header>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body" style="color: black;">
                    <p>Welcome back, {{ Auth::user()->name }}!</p>
                    <br>
                    <div class="clearfix">
                    <button onclick="window.location.href='/tasks'" class="btn btn-success">View Tasks</button>
                    <button onclick="window.location.href='/tasks/add'" class="btn btn-success">Add Task</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</header>
@endsection

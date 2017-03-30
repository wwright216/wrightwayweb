@extends('layouts.app')
@section ('content')
<header>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                       <div class="panel-heading">Add a Task</div>
                          <div class="panel-body">
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            <form class="form-horizontal" method="POST" action="/tasks" id="taskForm">
                             {{ csrf_field() }}
                              <div class="form-group" style="margin-left: 15px;">
                                <div class="form-group col-xs-12 floating-label-form-group controls">   
                                <label for="title">Title</label> 
                                <input type="text" class="form-control" id="title" name="title" placeholder="Task Title" required data-validation-required-message="Enter a title for your task.">
                                <p class="help-block text-danger"></p>
                                </div>
                              </div>
                              <div class="form-group" style="margin-left: 15px;">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="body">Body</label> 
                                <input type="textarea" class="form-control" id="body" name="body" placeholder="Task Description" required data-validation-required-message="Enter a description for your task.">
                                <p class="help-block text-danger"></p>
                                </div>
                              </div>
                              <div id="success"></div>
                              <div class="form-group col-xs-12">
                              <button type="submit" class="btn btn-success btn-lg">Add Task!
                              </button>
                              </div>
                            </form>
                          </div>
                      </div>
        </div>
    </div>
</div>
</header>
@include ('layouts.errors')
@endsection
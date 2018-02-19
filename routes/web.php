<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/quiz', 'QuizController@index');
Route::post('/quiz', 'QuizController@results');
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');
Route::post('/', 'ContactController@store');
Route::get('/unitConversion', 'unitConversionController@index');
Route::post('/unitConversion', 'unitConversionController@result');
Route::get('/weather', 'WeatherController@index');
Route::post('/weather', 'WeatherController@showWeather');
Route::get('/magic', 'MagicController@index');
Route::post('/magic', 'MagicController@show');
Route::get('/login', function () {
	return view('auth.login');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/tasks', 'TasksController@addTask');
Route::get('/tasks/add', function(){
	return view('tasks.add');
});
Route::post('/tasks/completed', 'TasksController@completed');
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');
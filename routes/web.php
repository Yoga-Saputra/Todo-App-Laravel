<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/new', [
    'uses' => 'PagesController@new'
]);
Route::get('/todos', 'TodoController@index')->name('todos');
Route::post('/create/todo', 'TodoController@insert')->name('/create/todo');
Route::get('/todos/delete/{id}', 'TodoController@delete');
Route::get('/todos/update/{id}', 'TodoController@update');
Route::post('todos/save/{id}', 'TodoController@save');
Route::get('todos/completed/{id}', [
    'uses' => 'TodoController@completed', 
    'as' => 'task.completed'
]);


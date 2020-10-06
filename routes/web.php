<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController')->name('home');
Route::get('/todos', 'TodosController@index')->name('todos.index');
Route::post('/todos', 'TodosController@store')->name('todos.store');
Route::post('/todos/{todo}/resolve', 'ResolveTodoController')->name('todos.store');
Route::get('/todos/done', 'TodosController@done')->name('todos.done');

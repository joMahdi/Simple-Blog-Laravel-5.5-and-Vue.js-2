<?php

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
Auth::routes();

//Route::get('/','TodoController@index');

// Route::get('/',function(){
// 	$todos=App\Todo::All();
// 	return view('todos.index',compact('todos'));
// });

Route::get('/',function(){
	
	return view('master');
});
// Route::get('/',function(){
	
//  	return view('welcome');
//  });

Route::resource('/home','HomeController');
Route::resource('/article','ArticleController');

Route::resource('/todos', 'TodoController');

//laravel with vue.js

Route::get('/getexperiences', 'ExperienceController@getExperience');

Route::get('/getexperiences2/{id}', 'ExperienceController@getExperience2');

Route::put('/updatedexperiences','ExperienceController@updateExperience');

Route::post('/addexperiences', 'ExperienceController@addExperience');

Route::delete('/deletedexperiences/{id}','ExperienceController@deleteExperience');

//todo list

Route::resource('comment', 'CommentController',['only'=>['update','destroy']]);

Route::post('comment/create/{todo}','CommentController@addComment')->name('todocomment.store');

//delete with button

Route::get('todos/destroy/{id}', 'TodoController@getDestroy')->name('todo.get.destroy');
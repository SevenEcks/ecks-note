<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//use App\Models\Note;
use App\Models\Note;
Route::get('/notes', function () {
    return View('view-notes');
});
Route::get('/notes/new', 'NoteController@newNote');
Route::post('/notes/create', 'NoteController@createNote');

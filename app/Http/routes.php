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
use App\Note;
Route::get('/', function () {
    return view('welcome');
});

Route::get('notes', function () {

    $notes = Note::all();
     //dd($notes);
    return view('notes',compact('notes'));
});

Route::get('notes/create', function() {
    return '[Crear notas]';
});

Route::post('notes', function() {
  return 'Creando ruta';
});

Route::get('notes/{notes}', function($notes) {
    return $notes;
});

Route::get('notes/{note}/{slug?}', function ($notes, $slug = null) {
  	dd($notes, $slug);

})->where('note', '[0-9]+');

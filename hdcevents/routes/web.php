<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;


Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/contato', function(){
    return view('contato');
});

Route::get('/produtos', function(){
    
    $busca = request('search');

    return view('produtos', ['busca' => $busca]);
});

Route::get('/produtos_teste/{id?}', function($id = null){
    return view('produto', ['id' => $id]);
});


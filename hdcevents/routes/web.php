<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function(){
    return view('contato');
});

Route::get('/produtos', function(){
    return view('produtos');
});

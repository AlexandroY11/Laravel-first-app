<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/estudiantes', function () {
    return view('estudiantes'); 
});

Route::get('/profesores', function () {
    return view('profesores'); 
});
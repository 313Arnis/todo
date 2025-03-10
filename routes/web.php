<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;

Route::resource('/todos', ToDoController::class);
Route::resource('/diaries', DiaryController::class);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/why', function () {
    return view('why');
});

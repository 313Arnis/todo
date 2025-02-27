<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiariesController extends Controller
{
    public function index() {
        $diaries = ToDo::all();
        return view("todos.index", compact("todos"));
        
    }
}

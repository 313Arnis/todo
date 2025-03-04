<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index() {
        $diaries = Diary::all();
        return view("diary.index", compact("diaries"));
    }

    public function show(Diary $diary) {
        return view("diary.show", compact("diary"));
    }

    public function create(Diary $diary) {
        return view("diary.create", compact("diary"));
    }

    public function store(Request $request) {

        $validated = $request->validate([
            "title" => "required|max:255",
            "body" => "required|max:255",
            "date" => "required|date|date_format:Y-m-d", 
        ]);

        
        Diary::create([
            "title" => $validated["title"],
            "body" => $validated["body"],
            "date" => $validated["date"]
        ]);

 
        return redirect("/diaries");
    }
}

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
    public function edit(Diary $diary) {
        return view("diary.edit", compact("diary"));
      }
      public function update(Request $request, Diary $diary) {
        $validated = $request->validate([
            "title" => "required|max:255",
            "body" => "required|max:255",
            "date" => "required|date|date_format:Y-m-d",           
        ]);
          $diary->title = $validated["title"];
          $diary->body = $validated["body"];
          $diary->date = $validated["date"];
          $diary->save();
        return redirect("/diaries");
        
      }
      public function destroy(Diary $diary){

        $diary->delete();
        return redirect("/diaries");
    
         
      }
}

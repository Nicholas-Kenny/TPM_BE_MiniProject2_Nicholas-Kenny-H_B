<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Tasklist;
use Illuminate\Http\Request;

class TasklistController extends Controller
{
    public function welcome(){
        $tasklists = Tasklist::all();
        return view('welcome', compact('tasklists'));
    }

    public function createList(){
        $statuses = Status::all();
        return view('createList', compact('statuses'));
    }

    public function storeList(Request $request){

        $filePath = public_path('storage/images');
        $file = $request->file('image');
        $fileName = $request->title .'-'. $file->getClientOriginalName();
        // $filePath = $file->storeAs('images', $fileName, 'public');
        $file->move($filePath, $fileName);


        Tasklist::create([
            'title' => $request -> title,
            'description' => $request -> description,
            'due_date' => $request -> due_date,
            'status_id' => $request -> status_name,
            // 'image' => $request -> $fileName
            'image' => $fileName
        ]);

        return redirect(route('welcome'));
    }

    public function editList($id){
        $tasklist = Tasklist::findOrfail($id);
        return view('editList', compact('tasklist'));
    }

    public function updateList($id, Request $request){
        $tasklist = Tasklist::findOrfail($id);

        $tasklist->update([
            'title' => $request -> title,
            'description' => $request -> description,
            'due_date' => $request -> due_date,
        ]);
        return redirect(route('welcome'));
    }

    public function deleteList($id){
        Tasklist::destroy($id);
        return redirect(route('welcome'));
    }
}

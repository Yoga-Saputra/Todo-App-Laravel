<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {
        $todos = DB::table('todos')->orderBy('id', 'desc')->get();
        return view('todos')->with('todos', $todos);
    }

    public function insert(Request $request)
    {
        // membuat new instace
        $todo = new Todo;

        //assign into coloum database
        $todo->todo = $request->todo;

        // save it
        $todo->save();

        //redirect user
        return redirect()->back();
    }
    public function delete($id)
    {
        $todo = \App\Todo::find($id);
        $todo->delete();
        return redirect()->back();
    }
    public function update($id)
    {
        $todo = Todo::find($id);
        return view('update')->with('todo', $todo);
    }
    public function save(Request $request, $id)
    {   
        $todo = Todo::find($id);
        $todo->todo = $request->todo;
        $todo->save();
        return redirect('/todos');
    }
    public function completed($id)
    {
        
        $todo = Todo::find($id);
        $todo->completed = 1;
        $todo->save();
        return redirect()->back();
    }
}

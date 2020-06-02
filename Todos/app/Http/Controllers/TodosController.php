<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo;

use Session;

class TodosController extends Controller
{
    public function index()
    {
        // $todo = Todo::all();
        $todo = Todo::latest()->get();
        return view('todos')->with('allTodos', $todo);
    }

    public function store(Request $request)
    {

        // dd($request);

        $todo = new Todo;

        $todo->todo = $request->todo;

        $todo->save();

        Session::flash('success', 'Todo created successfully');

        return redirect()->back();
    }

    public function delete($id)
    {
        $todo = Todo::find($id);

        $todo->delete();

        Session::flash('success', 'Todo deleted successfully');


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

        Session::flash('success', 'Todo updated successfully');


        return redirect('todos');
    }

    public function complete($id)
    {

        $todo = Todo::find($id);

        $todo->completed = 1;

        $todo->save();

        Session::flash('success', 'Todo deleted successfully');


        return redirect()->back();
    }
}
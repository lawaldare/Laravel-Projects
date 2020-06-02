<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{



    public function index()
    {
        
        //smh

        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name')->get();
        // $pizzas = Pizza::where('type','hawaiian')->get();
        
        $pizzas = Pizza::latest()->get();

        return view('pizzas.index', compact('pizzas'));
    }


    public function show(Pizza $pizza)
    {
        return view('pizzas.show', compact('pizza'));
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function store(Request $request)
    {
        Pizza::create($request->all());

        return redirect()->route('pizzas.index')->with('message', 'Thanks for your order');
    }

    public function destroy(Pizza $pizza)
    {
        $pizza->delete();

        return redirect()->route('pizzas.index')->with('message', 'Pizza deleted');
    }
}
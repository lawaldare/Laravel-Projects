@extends('layouts.app')

@section('content');

        <div class="wrapper create-pizza">
            <h1>Create a new Pizza</h1>

            <form action="{{ route('pizzas.store') }}" method="POST">
            @csrf
                <label for="name">Your name:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}">
                <label for="type">Choose pizza type:</label>
                <select name="type" id="type">
                    <option value="margarita">Margarita</option>
                    <option value="hawaiian">Hawaiian</option>
                    <option value="volcano">Volcano</option>
                    <option value="veg supreme">Veg Supreme</option>
                </select>
                <label for="base">Choose pizza base:</label>
                <select name="base" id="base">
                    <option value="cheesy crust">Cheesy crust</option>
                    <option value="garlic crust">Garlic crust</option>
                    <option value="thin and crispy">Thin and crispy</option>
                    <option value="thick">Thick</option>
                </select>
                <label>Extra toppings</label>
                <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
                <input type="checkbox" name="toppings[]" value="peppers">Peppers<br />
                <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
                <input type="checkbox" name="toppings[]" value="olives">Olives<br />
                <input type="submit" value="Order Pizza">
            </form>
        </div>

@endsection

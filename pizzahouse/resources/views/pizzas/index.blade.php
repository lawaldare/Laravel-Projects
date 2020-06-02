@extends('layouts.app')

@section('content');

<div class="wrapper pizza-index">
    <h1>Pizza Orders</h1>
    @foreach($pizzas as $pizza)
        <h4>
            <a href="{{ route('pizzas.show', $pizza) }}">
                {{$pizza->name}}
            </a>
        </h4>
    @endforeach
</div>

@endsection

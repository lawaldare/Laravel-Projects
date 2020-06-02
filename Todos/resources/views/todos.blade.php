@extends('layout')

@section('content')


<p class="title-header">Todos</p>

    <div class="row">
        <div class="col-12">
            <form action="/create/todo" method="POST">
                @csrf;
                <input type="text" name="todo" class="form-control input-lg" placeholder="Create a new todo">
            </form>
        </div>
    </div>
    <hr>
     @foreach($allTodos as $todo)
        {{ $todo->todo }}
        <a href="/todo/delete/{{ $todo->id }}" class="btn btn-danger">x</a>
        <a href="/todo/update/{{ $todo->id }}" class="btn btn-info btn-sm">update</a>
        @if(!$todo->completed)

            <a href="/todo/completed/{{ $todo->id }}" class="btn btn-sm btn-success">Mark as completed</a>

        @else

            <span class="text-success">Completed!</span>

        @endIf
         <hr>
    @endforeach


@endsection

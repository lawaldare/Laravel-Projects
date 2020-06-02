@extends('layout')

@section('content')


<p class="title-header">Update Todo</p>

    <div class="row">
        <div class="col-12">
            <form action="/todo/save/{{ $todo->id }}" method="POST">
                @csrf;
                <input type="text" name="todo" class="form-control input-lg" value="{{ $todo->todo }}" placeholder="Create a new todo">
            </form>
        </div>
    </div>

@endsection

@extends('layouts.header');

@section('content')

<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="/img/ph.png" alt="logo">
                <div class="title m-b-md">
                    The Lagos Best Pizzas
                </div>
                <p class="mssg">{{session('message')}}</p>
                <a href="/pizzas/create">Order a Pizza</a>
            </div>
        </div>
@endsection

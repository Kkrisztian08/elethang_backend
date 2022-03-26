@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>{{ Auth::user()->name }}</h1>
        <p>{{ Auth::user()->phone_number }}</p>
        <button>szerkeztés</button>
        <p>{{ Auth::user()->email }}</p>
        <button>szerkeztés</button>
        <p>{{ Auth::user()->address }}</p>
        <button>szerkeztés</button>
    </div>

@endsection

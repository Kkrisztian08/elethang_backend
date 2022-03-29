@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>{{ Auth::user()->name }}</h1>
        <div>
            <p>Felhasználónév: {{ Auth::user()->username }}</p>
        </div>
        <div>
            <p>Email: {{ Auth::user()->email }}</p>
        </div>
        <div>
            <p>Születésnap: {{ Auth::user()->birthday }}</p>
        </div>
        <div>
            <p>Cím: {{ Auth::user()->address }}</p>
        </div>
        <div>
            <p>Telefonszám: {{ Auth::user()->phone_number }}</p>
        </div>
        <button>szerkeztés</button>
    </div>

@endsection

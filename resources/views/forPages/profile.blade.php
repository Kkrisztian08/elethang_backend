@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>{{ Auth::user()->name }}</h1>
        <div>
            <p>Email: {{ Auth::user()->email }}</p>
            <button>szerkeztés</button>
        </div>
        <div>
            <p>Születésnap: {{ Auth::user()->birthday }}</p>
            <button>szerkeztés</button>
        </div>
        <div>
            <p>Cím: {{ Auth::user()->address }}</p>
            <button>szerkeztés</button>
        </div>
        <div>
        
            <p>Telefonszám: {{ Auth::user()->phone_number }}</p>
            <button>szerkeztés</button>
        </div>
    </div>

@endsection

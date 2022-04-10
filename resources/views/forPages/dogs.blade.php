@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        @foreach($dogs as $dog)
        @if($dog->gender=='Kan')
        <div class="col-12 col-sm-6  col-md-4 col-lg-3">
            <div class="card szivKarty">
                <a class="sziv" style="text-align: right; padding-right: 1em;" href="{{ url('/dogs',$dog->id) }}">
                    <img src="/img/next.png" type="button" class="img-fluid float-end" alt="kovetkezo">
                </a>
                <img class="img-fluid szivKep" src="/img/kutyaProfil.png" style="padding: 1.5em;" alt="kutya">

                <h3 style="color: blue;">{{ $dog->name }}</h3>

                <p>Születésnap: {{ ($dog->likely_bday) }}</p>
            </div>
        </div>
        @else
        <div class="col-12 col-sm-6  col-md-4 col-lg-3">
            <div class="card szivKarty">
                <a class="sziv" style="text-align: right; padding-right: 1em;" href="{{ url('/dogs',$dog->id) }}">
                    <img src="/img/next.png" type="button" class="img-fluid float-end" alt="kovetkezo">
                </a>
                <img class="img-fluid szivKep" src="/img/kutyaProfil.png" style="padding: 1.5em;" alt="kutya">

                <h3 style="color: hotpink;">{{ $dog->name }}</h3>

                <p>Születésnap: {{ ($dog->likely_bday) }}</p>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>


@endsection
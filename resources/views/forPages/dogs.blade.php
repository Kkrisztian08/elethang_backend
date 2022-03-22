@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            @foreach($dogs as $dog)
                <div class="col-sm-3 ">
                    <div class="card szivKarty">
                        <h3 class="sziv" style="text-align: right; padding-right: 1em;">{{ $dog->interest}}❤</h3>
                        <img class="img-fluid szivKep" src="/img/kutyaProfil.png" style="padding: 1.5em;" alt="kutya">
                        <h3>{{ $dog->name }}</h3>
                        <p>{{ $dog->gender }} {{ ($dog->likely_bday) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection

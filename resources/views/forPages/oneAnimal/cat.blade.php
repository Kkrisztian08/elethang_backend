@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-md-8">
                <h1>{{$cat->name}}</h1>
                <p id="egyAllat">{{$cat->gender }}</p>
                <p id="egyAllat">{{$cat->likely_bday }}</p>
                <p id="egyAllat">{{$cat->external_property }}</p>
                <p id="egyAllat">{{$cat->description }}</p>
                <p id="egyAllat">{{$cat->interest }}❤</p>
            </div>
            <div class="col-sm-12 col-md-4">
                <img src="/img/cicaProfil.png" alt="macska">
            </div>
        </div>
        <button id="orokbeFogad">Örokbefogadás</button>
    </div>

@endsection

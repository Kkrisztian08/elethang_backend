@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-md-4">
                <img src="/img/kutyaProfil.png" alt="kutya">
            </div>
            <div class="col-sm-12 col-md-8">
                <h1>{{$dog->name}}</h1>
                <p id="egyAllat">{{$dog->gender }}</p>
                <p id="egyAllat">{{$dog->likely_bday }}</p>
                <p id="egyAllat">{{$dog->external_property }}</p>
                <p id="egyAllat">{{$dog->description }}</p>
                <p id="egyAllat">{{$dog->interest }}❤</p>
            </div>
        </div>
        <button  type="button" class="blockB" id="orokbeFogad">Örokbefogadás</button>
    </div>

@endsection

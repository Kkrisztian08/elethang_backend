@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-md-4">
                <img src="/img/kutyaProfil.png" alt="kutya">
            </div>
            <div class="col-sm-12 col-md-8">
                <div class="row">
                    <div class="col-sm-9">
                        <h1>{{$dog->name}}</h1>
                    </div>
                    <div class="col-sm-3">
                        <h1 style="text-align: right; color: red;">{{$dog->interest }}❤</h1>
                    </div>
                </div>
                <p id="egyAllat">{{$dog->gender }}</p>
                <p id="egyAllat">{{$dog->likely_bday }}</p>
                <p id="egyAllat">{{$dog->external_property }}</p>
                <p id="egyAllat">{{$dog->description }}</p>
            </div>
        </div>
        <br>
        <br>
        
        <button  type="button" class="blockC btn btn-success">Örökbefogadás</button>
        <br>
        <button  type="button" style="border-radius: 30px !important;" class="blockB btn btn-success">Virtuális örökbefogadás</button>
    </div>

@endsection

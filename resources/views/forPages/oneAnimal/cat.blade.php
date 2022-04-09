@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-md-8">
                <div class="row">
                    <div class="col-sm-9">
                        <h1>{{$cat->name}}</h1>
                    </div>
                    <div class="col-sm-3">
                        <h1 style="text-align: left; color: red;">{{$cat->interest }}❤</h1>
                    </div>
                </div>
                <p id="egyAllat">{{$cat->gender }}</p>
                <p id="egyAllat">{{$cat->likely_bday }}</p>
                <p id="egyAllat">{{$cat->external_property }}</p>
                <p id="egyAllat">{{$cat->description }}</p>

            </div>
            <div class="col-sm-12 col-md-4">
                <img src="/img/cicaProfil.png" alt="macska">
            </div>
        </div>
        <br>
        <br>
        @if($cat->adoption_id!=1)
            <form action="{{route('store')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$cat->id}}" />
                <button style="text-align: right; padding-right: 0.5em; border:none; background-color: transparent !important;">
                                    
                    <button  type="submit" class="blockC btn btn-success">Örökbefogadás</button>
                </button>
            </form>
        @else
            <h1 style="text-align: center;">Ez a cica már örökbe van fogadva</h1>
        @endif
    </div>

@endsection

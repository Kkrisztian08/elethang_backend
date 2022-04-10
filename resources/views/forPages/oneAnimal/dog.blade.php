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
                    <h1>{{$dog->name}} <small>({{$dog->gender }})</small></h1>
                </div>
                <div class="col-sm-3">
                    <h1 style="text-align: right; color: red;">{{$dog->interest }}❤</h1>
                </div>
            </div>
            <p id="egyAllat">{{$dog->likely_bday }}</p>
            <p id="egyAllat">{{$dog->external_property }}</p>
            <p id="egyAllat">{{$dog->description }}</p>
        </div>
    </div>
    <br>
    <br>

    @if($dog->adoption_id==null)
    <form action="{{route('dogStore',['dog'=>$dog->id])}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$dog->id}}" />
        <button style="text-align: right; padding-right: 0.5em; border:none; background-color: transparent !important;">

            <button type="submit" class="blockC btn btn-success">Örökbefogadás</button>
        </button>
    </form>
    @else
    <h1 style="text-align: center;">Ez a kutya már örökbe van fogadva</h1>
    @endif

    @if ($message = Session::get('success'))

    <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>{{ $message }}!</strong>
    </div>
    @endif
</div>

@endsection
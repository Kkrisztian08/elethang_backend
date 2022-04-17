@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row" style="text-align: justify;">
        <div class="col-sm-12 col-md-8">
            <h1>{{$cat->name}} <small>({{$cat->gender }})</small></h1>
            <p id="egyAllat">{{$cat->likely_bday }}</p>
            <p id="egyAllat">{{$cat->external_property }}</p>
            <p id="egyAllat">{{$cat->description }}</p>

        </div>
        <div class="col-sm-12 col-md-4">
            <img  class="img-fluid" src="/img/cicaProfil.png" alt="macska">
        </div>
    </div>
    <br>
    <br>
    @if($cat->adoption_id==null)
    <form action="{{route('store',['cat'=>$cat->id])}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$cat->id}}" />
        <button style="text-align: right; padding-right: 0.5em; border:none; background-color: transparent !important;">

            <button type="submit" class="blockC btn btn-success">Örökbefogadás</button>
        </button>
    </form>
    @else
    <h1 style="text-align: center;">Ez a cica már örökbe van fogadva</h1>
    @endif

    @if ($message = Session::get('success'))

    <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>{{ $message }}!</strong>
    </div>
    @endif
</div>

@endsection
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @foreach($cats as $cat)
        @if($cat->gender=='Kandúr')
        <div class="col-12 col-sm-6  col-md-4 col-lg-3">
            <div class="card szivKarty">
                <a class="sziv" style="text-align: right; padding-right: 1em;" href="{{ url('/cats',$cat->id) }}">
                    <img src="/img/next.png" type="button" class="img-fluid float-end" alt="kovetkezo">
                </a>
                <img class="img-fluid szivKep" src="/img/cicaProfil.png" alt="macska">
                <h3 style="color: blue;">{{ $cat->name }}</h3>
                <p>Stületésnap: {{ ($cat->likely_bday) }}</p>
            </div>
        </div>
        @else
        <div class="col-12 col-sm-6  col-md-4 col-lg-3">
            <div class="card szivKarty">
                <a class="sziv" style="text-align: right; padding-right: 1em;" href="{{ url('/cats',$cat->id) }}">
                    <img src="/img/next.png" type="button" class="img-fluid float-end" alt="kovetkezo">
                </a>
                <img class="img-fluid szivKep" src="/img/cicaProfil.png" alt="macska">
                <h3 style="color: hotpink;">{{ $cat->name }}</h3>
                <p>Stületésnap: {{ ($cat->likely_bday) }}</p>
            </div>
        </div>
        @endif
        @endforeach

    </div>
</div>

@endsection
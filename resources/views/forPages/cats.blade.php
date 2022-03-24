@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @foreach($cats as $cat)
                <div class="col-12 col-sm-6  col-md-4 col-lg-3">
                    <div class="card szivKarty">
                        <h3 class="sziv" style="text-align: right; padding-right: 1em;">{{ $cat->interest}}❤</h3>
                        <img class="img-fluid szivKep" src="/img/cicaProfil.png" alt="macska">
                        
                        <a href="{{ url('/cats',$cat->id) }}">
                            <h3 >{{ $cat->name }}</h3>
                        </a>
                        <p>{{ $cat->gender }} {{ ($cat->likely_bday) }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection

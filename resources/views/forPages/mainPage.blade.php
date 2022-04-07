@extends('layouts.app')

@section('content')



<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <div class="rounded" style="text-align: justify">
                <h1>Röviden rólunk</h1>
                <p>Gyálon és környékén működő állatmentő alapítmány vagyunk. Csapatunk önerőből, saját szabadidejéből és szinte anyagi támogatás nélkül segíteti a környékbeli elhagyott állatokat. Alapítványunk jelenleg 5 aktív állatvédőből áll, akik lehetőségükhöz, szabadidejükhöz mérten próbálnak segíteni a bajbajutott kutyákon és cicákon. Mi is ugyanolyan hétköznapi emberek vagyunk, mint bárki más: család, munka és egyéb teendők mellett teszünk az állatvédelemért.</p>
            </div>
            <br><br>
            <div class="row" style="text-align: center;">
                <div class="ezIde col-12-sm col-md-4">
                    <img class="img-fluid" src="/img/gombolyag.png" alt="gombolyag">
                    <h1>{{count($cats)}}</h1>
                    <h4>Gondozásunk alatt álló macskák száma</h4>
                </div>
                <div class="ezIde col-12-sm col-md-4">
                    <img class="img-fluid" src="/img/onkentes.png" alt="onkentes">
                    <h1>{{count($users)}}</h1>
                    <h4>Regisztrált önkénteseink</h4>
                </div>
                <div class="ezIde col-sm-12 col-md-4">
                    <img class="img-fluid" src="/img/csont.png" alt="csont">
                    <h1>{{count($dogs)}}</h1>
                    <h4>Gondozásunk alatt álló kutyák száma</h4>
                </div>
            </div>
            <br>
            <div class="owl-carousel owl-theme mt-5">
                @foreach($imageData as $data)
                <div class="item">
                    <div class="card">
                        <img src="{{ url('public/Image/'.$data->image) }}" class="card-img-top img-fluid" alt="kepek" />
                        <div class="card-body">
                            <h4 class="card-title">{{$data->updated_at}}</h4>
                            <p class="card-text d-block text-truncate text-wrap" >
                                {{$data->description}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


            <br>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <h1>Macskák</h1>
                        <div id="cicaCarousel" class="carousel slide" data-bs-ride="carousel">

                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                @guest
                                @foreach($cats as $cat)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img class="img-fluid" src="/img/cicaProfil.png" alt="macska">
                                    <h3>{{ $cat->name }}</h3>
                                    <p>{{ $cat->gender }}</p>
                                </div>
                                @endforeach
                                @else
                                @foreach($cats as $cat)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <a href="{{ url('/cats',$cat->id) }}">
                                        <img class="img-fluid" src="/img/cicaProfil.png" alt="macska">
                                        <h3>{{ $cat->name }}</h3>
                                        <p>{{ $cat->gender }}</p>
                                    </a>
                                </div>
                                @endforeach
                                @endguest
                            </div>
                            <!-- Left and right controls/icons -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#cicaCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#cicaCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h1>Kutyák</h1>
                            <div id="kutyaCarousel" class="carousel slide" data-bs-ride="carousel">

                                <!-- The slideshow/carousel -->
                                <div class="carousel-inner">
                                    @guest
                                    @foreach($dogs as $dog)
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <img class="img-fluid" src="/img/kutyaProfil.png" alt="kutya">
                                        <h3>{{ $dog->name }}</h3>
                                        <p>{{ $dog->gender }}</p>
                                    </div>
                                    @endforeach
                                    @else
                                    @foreach($dogs as $dog)
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <a href="{{ url('/dogs',$dog->id) }}">
                                            <img class="img-fluid" src="/img/kutyaProfil.png" alt="kutya">
                                            <h3>{{ $dog->name }}</h3>
                                            <p>{{ $dog->gender }}</p>
                                        </a>
                                    </div>
                                    @endforeach
                                    @endguest
                                </div>

                                <!-- Left and right controls/icons -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#kutyaCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#kutyaCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
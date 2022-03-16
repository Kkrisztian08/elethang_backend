@extends('layouts.app')

@section('content')
    


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <div class="rounded" style="text-align: justify">
                    <h1>Röviden rólunk</h1>
                    <p>Gyálon és környékén működő állatmentő alapítmány vagyunk. Csapatunk önerőből, saját szabadidejéből és szinte anyagi támogatás nélkül segíteti a környékbeli elhagyott állatokat.Alapítványunk jelenleg 5 aktív állatvédőből áll, akik lehetőségükhöz, szabadidejükhöz mérten próbálnak segíteni a bajbajutott kutyákon és cicákon. Mi is ugyanolyan hétköznapi emberek vagyunk, mint bárki más: család, munka és egyéb teendők mellett teszünk az állatvédelemért.</p>

                    <h3>Kedves Támogatóink, Örökbefogadóink!</h3>
                    <p>Az Élethang Alapítvány hivatalos támogatója lett a DaDo Szuperprémium Kutyatáp.</p>
                    <p>A gondozásunkban lévő kutyák többsége utcáról, vagy több hetes/hónapos gyepmesteri fogságból kerül hozzánk. Ezért nagyon fontosnak tartjuk, hogy minőségi táppal etessük Őket. Amiért a DaDo kutyatáp mellett döntöttünk: hypoallergén, gyomorkímélő, a táp mellé nem szükséges más táplálék kiegészítőt adni, hisz a DaDo-ban benne vannak az ízületvédők, vitaminok, ásványi anyagok, Omega 3 és 6 esszenciális zsírsavak megfelelő arányban, EPA + DHA, FOS, prebiotikus rostok, stb.).</p>

                    <h3>Ha szeretnéd kutyáinkat tápadománnyal támogatni, akkor ezt többféleképpen teheted meg:</h3>

                    <div class="container mt-3">
                        <p>1. Örökbefogadó gazdiként, vagy támogató vásárlóként ha DaDo kutyatápot rendelsz saját kutyádnak a dado-kutyatap.hu/webaruhaz oldalon, akkor a vásárlás értékének 10%-a támogatásként jóváíródik alapítványunk számára. ( a megrendelő keresztneve mellé írjátok oda "Élethang"  )</p>
                        <p>2. Tápvásárlási utalványt vehetsz alapítványunk számára a DaDo tápadomány gyűjtő oldalunkon. Utalvány ára: 999 Ft. Ez 1 kg tápadomány, melyhez a DaDo még hozzátesz 0,5 kg tápot, tehát 999 Ft-ért 1,5 kg tápot kapunk. (ha 2 kg-ot szeretnél venni akkor 2x999 Ft + 1 kg a DaDo részéről = 3 kg hypoallergén tápadomány)</p>
                    </div>
                    <div>A tápadomány gyűjtő oldalunkat itt találod:
                        <a href="http://dado-kutyatap.hu/elethang-alapitvany/">DaDo Adomány</a>
                    </div>
                    <br>
                    <h3 style="text-align: center">Köszönjük támogatásod az Élethang védencei nevében is!</h3>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <h2>Macskák</h2>
                                <div id="cicaCarousel" class="carousel slide" data-bs-ride="carousel">    

                                        <!-- The slideshow/carousel -->
                                        <div class="carousel-inner">
                                            @guest
                                                @foreach($cats as $cat)
                                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                        <img class="img-fluid" src="/img/cicaProfil.png" alt="macska kép">
                                                        <h3>{{ $cat->name }}</h3>
                                                        <p>{{ $cat->gender }}</p>
                                                    </div>
                                                @endforeach
                                            @else
                                                @foreach($cats as $cat)
                                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                        <a href="{{ url('/cats') }}">
                                                            <img class="img-fluid" src="/img/cicaProfil.png" alt="macska kép">
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
                                                        <img class="img-fluid" src="/img/cicaProfil.png" alt="kutya kép">
                                                        <h3>{{ $dog->name }}</h3>
                                                        <p>{{ $dog->gender }}</p>
                                                    </div>
                                                @endforeach
                                            @else
                                                @foreach($dogs as $dog)
                                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                        <a href="{{ url('/cats') }}">
                                                            <img class="img-fluid" src="/img/kutyaProfil.png" alt="kutya kép">
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

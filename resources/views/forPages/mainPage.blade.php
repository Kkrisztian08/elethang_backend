@extends('layouts.app')

@section('content')
    


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <div class="rounded" style="text-align: justify">
                    <h1>Röviden rólunk</h1>
                    <p>Gyálon és környékén működő állatmentő alapítmány vagyunk. Csapatunk önerőből, saját szabadidejéből és szinte anyagi támogatás nélkül segíteti a környékbeli elhagyott állatokat. Alapítványunk jelenleg 5 aktív állatvédőből áll, akik lehetőségükhöz, szabadidejükhöz mérten próbálnak segíteni a bajbajutott kutyákon és cicákon. Mi is ugyanolyan hétköznapi emberek vagyunk, mint bárki más: család, munka és egyéb teendők mellett teszünk az állatvédelemért.</p>

                </div>


                <!-- Carousel wrapper -->
                <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
                    <!-- Controls -->
                    <div class="d-flex justify-content-center mb-4">
                        <button class="carousel-control-prev position-relative" type="button" data-mdb-target="#carouselMultiItemExample" data-mdb-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next position-relative" type="button" data-mdb-target="#carouselMultiItemExample" data-mdb-slide="next" >
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- Inner -->
                    <div class="carousel-inner py-4">
                        <!-- Single item -->
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/181.webp" class="card-img-top" alt="Waterfall" />
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 d-none d-lg-block">
                                        <div class="card">
                                            <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/183.webp" class="card-img-top" alt="Sunset over the Sea" />
                                            <div class="card-body">
                                                <h5 class="card-title">Esemény</h5>
                                                <p class="card-text">Leírás</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 d-none d-lg-block">
                                        <div class="card">
                                            <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" class="card-img-top" alt="Sunset Over the Sea" />
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p>
                                                
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Inner -->
                </div>
                <!-- Carousel wrapper -->
                


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

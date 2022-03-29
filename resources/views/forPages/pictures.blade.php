@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Kép feltoltese</h1>
        <h2>törlése</h2>
        <h3>mind ide</h3>
        
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
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/183.webp" class="card-img-top" alt="Sunset over the Sea" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" class="card-img-top" alt="Sunset Over the Sea" />
                                    <div class="card-body">
                                        <h5 class="card-title">Esemény</h5>
                                        <p class="card-text">Leírás</p>
                                        <a href="#!" class="btn btn-primary">Törlés</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Single item -->
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/181.webp" class="card-img-top" alt="Waterfall" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" class="card-img-top" alt="Sunset Over the Sea" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/183.webp" class="card-img-top" alt="Sunset over the Sea" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single item -->
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/181.webp" class="card-img-top" alt="Waterfall" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" class="card-img-top" alt="Sunset Over the Sea" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/183.webp" class="card-img-top" alt="Sunset over the Sea" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
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

@endsection

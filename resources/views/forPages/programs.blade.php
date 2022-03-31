@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 style="text-align: center;">Programjaim</h1>
        <br>
 
        <div class="accordion" id="accordionExample">
            @foreach($apps as $app)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{$app->id}}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$app->id}}" aria-expanded="false" aria-controls="collapse{{$app->id}}">
                            Program: {{ ($app->id) }} Idő: {{ $app->user_id }} 
                        </button>
                    </h2>
                    <div id="collapse{{$app->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$app->id}}" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-3 col-sm-12">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Program választása</option>
                                        @foreach($infos as $info)
                                            <option value="{{$info->id}}">{{$info->type}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Nap választása</option>
                                        <option value="1">Hétfő</option>
                                        <option value="2">Kedd</option>
                                        <option value="3">Szerda</option>
                                        <option value="4">Csütörtök</option>
                                        <option value="5">Péntek</option>
                                        <option value="6">Szombat</option>
                                        <option value="7">Vasárnap</option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <select class="form-select" aria-label="Default select example">
                                       <option selected>Turnus választása</option>
                                        <option value="1">08:00</option>
                                        <option value="2">10:00</option>
                                        <option value="3">13:00</option>
                                        <option value="4">15:00</option>
                                    </select>
                                </div>

                                <div class="col-md-3 col-sm-12">
                                    <img type="button" class="img-fluid" style="float:left;" src="/img/ceruza.png" alt="Szerkeztes">
                                    <img type="button" class="img-fluid" style="float:right;" src="/img/kuka.png" alt="Torles">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div> 
        
        
        <br>
        <div class="row">
            <div class="col-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Program választása</option>
                    @foreach($infos as $info)
                        <option value="{{$info->id}}">{{$info->type}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Nap választása</option>
                    <option value="1">Hétfő</option>
                    <option value="2">Kedd</option>
                    <option value="3">Szerda</option>
                    <option value="4">Csütörtök</option>
                    <option value="5">Péntek</option>
                    <option value="6">Szombat</option>
                    <option value="7">Vasárnap</option>
                </select>
            </div>
            <div class="col-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Turnus választása</option>
                    <option value="1">08:00</option>
                    <option value="2">10:00</option>
                    <option value="3">13:00</option>
                    <option value="4">15:00</option>
                    
                </select>
            </div>
            <div class="col-2">
                <button type="button" class="blockB" >Jelentkezés</button>
            </div>
            <br><br><br><br>
            <h1>Minden turnus a megadott időponttól 2 órán keresztül tart! A választott turnus vége előll legkésőbb fél órával lehet a rövid ideig tartó programokra megjelenni.</h1>
            <h2>12:00 és 13:00 között ebédszünet miatt nincsenek programok.</h2>
        </div>
    </div>

@endsection

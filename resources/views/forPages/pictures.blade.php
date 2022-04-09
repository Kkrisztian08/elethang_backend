@extends('layouts.app')

@section('content')

<div class="container">
    <h2 style="text-align: center;">Új kép feltöltése</h2>

    <div class="container" style="padding: 5em;">
        <form method="post" action="{{ route('images.store') }}" enctype="multipart/form-data">
            @csrf
            <div style="padding: 1em;">
                <div class="image">
                    <label>
                        <h4>Kép választása</h4>
                    </label>
                    <input type="file" class="form-control" required name="image">
                </div>
                <div class="description">
                    <label>
                        <h4>Leírás hozzáadása</h4>
                    </label>
                    <input type="text" class="form-control" required name="description">
                </div>
            </div>
            <button class="post_button float-end" style="border:none; margin: 0.5em; background-color: transparent;">
                <img src="/img/feltolt.png" type="submit" class="img-fluid" alt="torol">
            </button>
        </form>

    </div>


    @if ($message = Session::get('success'))

    <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>{{ $message }}!</strong>
    </div>
    @endif



    <h2 style="text-align: center;">Képeim</h2>
    <div class="container">
        <div class="owl-carousel owl-theme mt-5">
            @foreach($imageData as $data)
            <div class="item">
                <div class="card szivKartyB">
                    <img style="padding-top: 1.9em;" src="{{ url('public/Image/'.$data->image) }}" class="card-img-top img-fluid" alt="kepek" />

                    <div class="card-body">
                        <form action="{{route('editImage')}}" method="post">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="id" value="{{$data->id}}" />
                            <input type="text" class="form-control" required placeholder="{{$data->description}}" name="description">

                            <button style="text-align: left; padding-right: 0.5em; border:none; background-color: transparent !important;">
                                <img src="/img/ceruza.png" type="submit" class="img-fluid " alt="Szerkeztes">
                            </button>
                        </form>
                    </div>
                    <div class="szivB">
                        <form action="{{route('delete')}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{$data->id}}" />
                            <button style="text-align: right; padding-right: 0.5em; border:none; background-color: transparent !important;">
                                <img src="/img/kuka.png" type="submit" class="img-fluid float-end" alt="torol">
                            </button>
                        </form>

                    </div>
                    <div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>








</div>

@endsection
@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Kép feltoltese</h2>
        <img type="button" class="img-fluid float-end" src="/img/feltolt.png" alt="Mentes">
        <br><br>
        


        <div class="container">
            <form method="post" action="{{ route('images.store') }}" 
                    enctype="multipart/form-data">
                @csrf
                <div class="image">
                    <label><h4>Kép hozzáadása</h4></label>
                    <input type="file" class="form-control" required name="image">
                </div>
                <div class="description">
                    <label><h4>Leírás hozzáadása</h4></label>
                    <input type="text" class="form-control" required name="description">
                </div>

                <div class="post_button">
                <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
            
            @if ($message = Session::get('success'))

                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>{{ $message }}!</strong>
                </div>
            @endif
        </div>



        <div class="container">
        <h3>Képeim</h3><hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Kép</th>
                    <th scope="col">Leírása</th>
                </tr>
            </thead>
            <tbody>
                @foreach($imageData as $data)
                    <tr>
                        <td>
                            <img src="{{ url('public/Image/'.$data->image) }}" style="height: 100px; width: 150px;">
                        </td>
                        <td>{{$data->description}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>







        
    </div>

@endsection

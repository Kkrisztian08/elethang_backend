@extends('layouts.app')

@section('content')
<div class="container">
    <h1 style="text-align: center;">{{ Auth::user()->name }}</h1>
    <br>

    <ul class="list-group profilL">
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Felhasználónév:</h3>
                </div>
                <div class="col-sm-6">
                    <h5>{{ Auth::user()->username }}</h5>
                </div>
            </div>
        </li>
        <hr>
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Email:</h3>
                </div>
                <div class="col-sm-6">
                    <h5>{{ Auth::user()->email }}</h5>
                </div>
            </div>
        </li>
        <hr>
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Születésnap:</h3>
                </div>
                <div class="col-sm-6">
                    <h5>{{ Auth::user()->birthday }}</h5>
                </div>
            </div>
        </li>
        <hr>
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Cím:</h3>
                </div>
                <div class="col-sm-6">
                    <h5>{{ Auth::user()->address }}</h5>
                </div>
            </div>
        </li>
        <hr>
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Telefonszám:</h3>
                </div>
                <div class="col-sm-6">
                    <h5>{{ Auth::user()->phone_number }}</h5>
                </div>
            </div>
        </li>
    </ul>

</div>

@endsection
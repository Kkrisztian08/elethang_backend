@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Erősítsd meg az e-mail címed') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Új ellenőrző linket küldtünk az e-mail címére.') }}
                        </div>
                    @endif

                    {{ __('Mielőtt folytatná, kérjük, ellenőrizze e-mailjében az ellenőrző linket.') }}
                    {{ __('Ha nem kapta meg az e-mailt') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('kattintson ide másik kéréséhez') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

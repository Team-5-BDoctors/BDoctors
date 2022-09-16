@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>{{ __('You are logged in!') }}</div>
                    
                    <a href="{{route("doctor.show", Auth::user()->slug)}}" class="btn btn-primary">Vedi profilo</a>
                    <a href="{{route("doctor.edit", Auth::user()->slug)}}" class="btn btn-secondary">Aggiunge o Modifica Informazioni profilo</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
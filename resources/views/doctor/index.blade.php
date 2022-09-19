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
                    
                    <a href="{{route("doctor.show")}}" class="btn btn-primary">Vedi profilo</a>
                    <a href="{{route("doctor.edit")}}" class="btn btn-secondary">Aggiunge o Modifica Informazioni profilo</a>
                    <a href="{{route("doctor.messages.index")}}" class="btn btn-secondary">Messaggi ricevuti</a>
                    <a href="{{route("doctor.reviews.index")}}" class="btn btn-secondary">Recensioni Ricevute</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

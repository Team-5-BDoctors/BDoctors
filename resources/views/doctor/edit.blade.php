@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modifica Profilo') }}</div>
                <div class="card-body">
                    <form action="{{route('doctor.update', $user->slug)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label for="surname">Cognome</label>
                            <input type="text" class="form-control" id="surname" name="surname" value="{{$user->surname}}">
                        </div>
                        <div class="form-group">
                            <label for="address">Indirizzo</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{$user->address}}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefono</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{$user->phone}}">
                        </div>
                        <div class="form-group">
                            <label for="specialization">Specializzazione</label>
                            <input type="text" class="form-control" id="specialization" name="specialization" value="{{$user->specialization}}">
                        </div>
                        <div class="form-group">
                            <label for="image">Immagine</label>
                            <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="curriculum">Curriculum</label>
                            <input type="file" class="form-control-file" id="curriculum" name="curriculum" accept="application/pdf">
                        </div>
                        <button type="submit" class="btn btn-primary">Salva</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

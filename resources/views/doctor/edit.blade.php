@extends('layouts.app')

@section('content')

<div class="container h-100 d-flex align-items-center justify-content-center">
    <div class="edit-card my-auto">
        <h1 class="edit-card-title">Modifica profilo</h1>
        <div class="row">
            <div class="col-12 col-xl-7">
                <form action="{{ route('doctor.update', $user->slug) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row h-100">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name" class="form-label">Nome*</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                id="name" name="name" value="{{ $user->name }}" required="">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="surname" class="form-label">Cognome*</label>
                                <input type="text" class="form-control @error('surname') is-invalid @enderror" 
                                id="surname" name="surname" value="{{ $user->surname }}" required="">
                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email" class="form-label">Email*</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" name="email" value="{{ $user->email }}" required="">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="address" class="form-label">Indirizzo*</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" 
                                id="address" name="address" value="{{ $user->address }}" required="">
                                @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="phone" class="form-label">Telefono*</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" 
                                id="phone" name="phone" value="{{ $user->phone }}" required="">
                                @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        
                        <div class="col-12 col-xl-6">
                            <div class="form-group spec-box">
                                <label for="specializations" class="form-label">Specializzazioni *</label>
                                <div class="row row-cols-1 row-cols-xl-2 g-1">
                                    @foreach ($specializations as $specialization)
                                        <div class="col btn-group" role="group"
                                            aria-label="Basic checkbox toggle button group">
                                            <input type="checkbox" class="btn-check specializations"
                                                name="specializations[]" value="{{ $specialization->id }}"
                                                id={{ $specialization->id }} autocomplete="off"
                                                {{ $user->specializations->contains($specialization) ? 'checked' : '' }}>
                                            <label class="btn btn-outline-primary"
                                                for={{ $specialization->id }}>{{ $specialization->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                                @error('specialization')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="form-group">
                                <label for="services">Prestazioni offerte</label>
                                <textarea rows="5" type="text" class="form-control @error('services') is-invalid @enderror" id="services"
                                    name="services">{{ $user->services }}</textarea>
                                @error('services')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="image" class="form-label">Immagine Profilo</label>
                                <input class="form-control form-control-sm @error('image') is-invalid @enderror" 
                                id="image" type="file" name="image" accept="image/*">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="curriculum" class="form-label">Curriculum</label>
                                <input class="form-control form-control-sm @error('curriculum') is-invalid @enderror" 
                                id="curriculum" type="file" name="curriculum" accept="application/pdf">
                                @error('curriculum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary w-100 mt-5">Salva</button>
                        </div>
                </div>
                
            </div>
            <div class="d-none d-xl-block col-lg-5">
                <div class="bg-img">
                    <img class=" w-100 text-center" src="{{ asset('storage/' . Auth::user()->image) }}" alt="">
                </div>
            </div>
            </form>
        </div>
    </div>

@endsection

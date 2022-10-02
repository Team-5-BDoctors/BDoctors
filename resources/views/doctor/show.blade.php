{{-- simple page that shows users info --}}

@extends('layouts.app')

@section('content')

<div class="container h-100 ">
    <div class="doctor-informations h-100 justify-content-center align-items-center">
        <div class="row g-0 m-auto w-100">
            <div class="col-12 col-md-7">
                <div class="doctor-details h-100">
                    
                        <div class="d-flex flex-column justify-content-center align-items-center h-100">
                            <div>
                                <h2 class="mb-3 fw-bold display-6">{{$user->name}} {{$user->surname}}</h2>
                                <div class="pb-4">
                                    <h4 class="mb-0">Email</h4>
                                    <div class="text-muted">{{$user->email}}</div>
                                </div>
                                <div class="pb-4">
                                    <h4 class="mb-1">Telefono</h4>
                                    <div class="text-muted">{{ $user->phone }}</div>
                                </div>
                                <div class="pb-4">
                                    <h4 class="mb-1">Indirizzo</h4>
                                    <div class="text-muted">{{ $user->address }}</div>
                                </div>
                                <div class="pb-4">
                                    <h4 class="mb-1">Specializzazioni</h4>
                                    @foreach ($user['specializations'] as $specialization)
                                        <span class="text-primary">{{ $specialization->name}}</span>
                                    @endforeach                                
                                </div>
                                <div class="pb-4">
                                    <h5 class="mb-1">Servizi</h5>
                                    <div class="text-muted">{{ $user->services }}</div>
                                </div>
                                <h4>Azioni</h4>
                                    <form class="mt-2 d-inline" action="{{ route('doctor.destroy') }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Sei sicuro di voler cancellare il tuo account?')" type="submit" class="btn btn-danger rounded-0 me-2">
                                            <i class="fa-sharp fa-solid fa-trash fs-4 p-1"></i>
                                        </button>
                                    </form>
                                    <a href="{{route("doctor.edit")}}" class="btn btn-primary rounded-0">
                                        <i class="fa-solid fa-pen-to-square fs-4 p-1"></i>
                                    </a>
                                
                            </div>
                        </div>
                </div>
            </div>
            <div class="d-none d-md-block col-md-5">
                <div class="doctor-img-bg bg-white h-100">
                    <img class="profile-img" src="{{ asset('storage/' . $user->image) }}" alt="">
                </div>
            </div>
        </div>
    </div>
        <!-- ><div class="doctor-informations w-75 m-auto">
            <div class="row g-0 border rounded overflow-hidden mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-7 p-4 d-flex flex-column position-static">
                  <h2 class="mb-3 fw-bold ">{{$user->name}} {{$user->surname}}</h2>
                  <div class="pb-2">
                    <h5 class="mb-0">Email</h5>
                    <div class="text-muted">{{$user->email}}</div>
                  </div>
                  <div class="pb-2">
                    <h5 class="mb-1">Telefono</h5>
                    <div class="text-muted">{{ $user->phone }}</div>
                  </div>
                  <div class="pb-2">
                    <h5 class="mb-1">Indirizzo</h5>
                    <div class="text-muted">{{ $user->address }}</div>
                  </div>
                  <div class="pb-2">
                    <h5 class="mb-1">Servizi</h5>
                    <div class="text-muted">{{ $user->services }}</div>
                  </div>
                  
                  
                  
                  <form class="mt-2" action="{{ route('doctor.destroy') }}" method="post">
                    @csrf
                    @method('DELETE')

                        <button onclick="return confirm('Sei sicuro di voler cancellare il tuo account?')" type="submit" class="btn btn-danger">Elimina account</button>
                    </form>
                </div>
                <div class="col-5 d-none d-lg-block">
                  <img class="avatar" src="{{ asset('storage/' . $user->image) }}" alt="">        
                </div>
            </div>
        </div>
        <!--  
            <div class="card">
                <div class="card-header">{{ __('User') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/' . $user->image) }}" alt="user image" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <h3>{{ $user->name }}</h3>
                            <p>{{ $user->specialization }}</p>
                            <p>{{ $user->email }}</p>
                            <p>{{ $user->phone }}</p>
                            <p>{{ $user->address }}</p>

                            <form action="{{ route('doctor.destroy') }}" method="post">
                                @csrf
                                @method('DELETE')

                            <button onclick="return confirm('Sei sicuro di voler cancellare il tuo account?')" type="submit" class="btn btn-danger">cancella account</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>-->
       

</div>

@endsection
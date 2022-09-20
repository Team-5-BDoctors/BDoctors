{{-- simple page that shows users info --}}

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
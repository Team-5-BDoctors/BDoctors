@extends('layouts.app')

@section('content')
<div class="h-100 d-flex align-items-center justify-content-center text-center">
    <div class="form-signin w-25 m-auto">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <img class="mb-4" src="{{asset('images/bdoctors_small_logo_original.png')}}" alt="" width="75" height="75">
            <h1 class="h3 mb-3 fw-normal">Registrati</h1>
            <div class="form-floating mb-1">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Inserisci il tuo Nome" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <label for="name">Nome</label>
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="form-floating mb-1">
                <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname" placeholder="Inserisci il tuo Cognome" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>
                <label for="surname">Cognome</label>
                  @error('surname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

            <div class="form-floating mb-1">
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Inserisci Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              <label for="email">Email</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-floating mb-1">
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required autocomplete="current-password">
              <label for="password">Password</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating mb-1">
                <input type="password" class="form-control" id="password-confirm" placeholder="Password" name="password_confirmation" required autocomplete="new-password">
                <label for="password-confirm">Conferma Password</label>
            </div>
            <div class="form-floating mb-1">
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="address" name="address" required autocomplete="Indirizzo">
                <label for="address">Indirizzo</label>
                  @error('address')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
            </div>
            <div class="form-floating mb-1">
                <select name="specialization" id="specialization"
                class="form-control text-center @error('specialization') is-invalid @enderror" required>
                    <option value="">Seleziona la specializzazione</option>
                    @foreach ($specializations as $specialization)
                    <option class="" value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                    @endforeach
                </select>

                @error('specialization')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <button class="w-100 btn btn-lg btn-primary text-white" type="submit">Registrati</button>
            
        </form>
    </div>
</div>

    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row pb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Nome *') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row pb-3">
                                <label for="surname"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Cognome *') }}</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text"
                                        class="form-control @error('surname') is-invalid @enderror" name="surname"
                                        value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                    @error('surname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row pb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo e-mail *') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row pb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password *') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row pb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Conferma Password *') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>


                            <div class="form-group row pb-3">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo *') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                        class="form-control @error('address') is-invalid @enderror" name="address"
                                        value="{{ old('address') }}" required autocomplete="address" autofocus>

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row pb-3">
                                <label for="specialization"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Specializzazione *') }}</label>

                                <div class="col-md-6">
                                    <select name="specialization" id="specialization"
                                        class="form-control @error('specialization') is-invalid @enderror" required>
                                        <option value="">Seleziona la specializzazione</option>
                                        @foreach ($specializations as $specialization)
                                            <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('specialization')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registrati') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  -->
@endsection

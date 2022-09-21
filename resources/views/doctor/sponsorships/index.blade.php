@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Sponsorizza il tuo profilo</div>
                    {{-- h2 tag with end date of the existent sponsorhip in the pivot table user_sponsorship (if there's one and the date is future) --}}
                    @if ($user->sponsorships()->exists() && $user->sponsorships()->first()->ends_at > now())
                        <h2 class="pb-5">La tua sponsorizzazione scade il {{ $user->sponsorships()->first()->ends_at }}</h2>
                    @endif
                    <div class="card-body">
                        <form action="{{ route('doctor.sponsorships.store') }}" method="POST">
                            @csrf
                            <div class="form-group pb-5">
                                <label for="sponsorship">Scegli il piano di sponsorizzazione</label>
                                <select class="form-control" name="sponsorship" id="sponsorship">
                                    @foreach ($sponsorships as $sponsorship)
                                        <option value="{{ $sponsorship->id }}">{{ $sponsorship->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Sponsorizza</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


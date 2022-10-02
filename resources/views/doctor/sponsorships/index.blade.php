@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Sponsorizza il tuo profilo</div>
                    @if ($userSponsorships->last() != '' && $userSponsorships->last()->ends_at > now())
                        <h2 class="pb-4 pt-2 text-center">La tua sponsorizzazione scade il
                            {{ $userSponsorships->last()->ends_at }}</h2>
                    @endif
                    <div class="card-body">
                        <form action="{{ route('doctor.sponsorships.store') }}" method="POST">
                            @csrf
                            <div class="form-group pb-3">
                                <label for="sponsorship">Scegli il piano di sponsorizzazione</label>
                                <select class="form-control" name="sponsorship_id" id="sponsorship">
                                    @foreach ($sponsorships as $sponsorship)
                                        <option value="{{ $sponsorship->id }}">{{ $sponsorship->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <div id="dropin-wrapper">
                                    <div id="dropin-container"></div>
                                    <button type="submit" id="submit-button" class="btn btn-primary">Sponsorizza</button>
                                </div>
                            </div>
                            <script>
                                var button = document.querySelector('#submit-button');

                                braintree.dropin.create({
                                    authorization: 'sandbox_386gzwr8_tkhvshpg3x42mdwt',
                                    selector: '#dropin-container'
                                }, function(err, instance) {
                                    button.addEventListener('click', function() {
                                        instance.requestPaymentMethod(function(err, payload) {
                                            // Submit payload.nonce to your server
                                        });
                                    })
                                });
                            </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

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
                            <div class="form-group pb-5">
                                <label for="sponsorship">Scegli il piano di sponsorizzazione</label>
                                <select class="form-control" name="sponsorship_id" id="sponsorship">
                                    @foreach ($sponsorships as $sponsorship)
                                        <option value="{{ $sponsorship->id }}">{{ $sponsorship->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div id="dropin-wrapper">
                                <div id="checkout-message"></div>
                                <div id="dropin-container"></div>
                                <button id="submit-button">Submit payment</button>
                            </div>

                            {{-- <button type="submit" class="btn btn-primary">Sponsorizza</button> --}}
                        </form>
                        
                        <script>
                            var button = document.querySelector('#submit-button');

                            braintree.dropin.create({
                                // Insert your tokenization key here
                                authorization: 'sandbox_csj4dmwc_tkhvshpg3x42mdwt',
                                container: '#dropin-container'
                            }, function(createErr, instance) {
                                button.addEventListener('click', function() {
                                    instance.requestPaymentMethod(function(requestPaymentMethodErr, payload) {
                                        // When the user clicks on the 'Submit payment' button this code will send the
                                        // encrypted payment information in a variable called a payment method nonce
                                        $.ajax({
                                            type: 'POST',
                                            url: 'payment/makePayment',
                                            data: {
                                                'paymentMethodNonce': $result.paymentMethodNonce,
                                                'amount': $result.amount
                                            }
                                        }).done(function(result) {
                                            // Tear down the Drop-in UI
                                            instance.teardown(function(teardownErr) {
                                                if (teardownErr) {
                                                    console.error('Could not tear down Drop-in UI!');
                                                } else {
                                                    console.info('Drop-in UI has been torn down!');
                                                    // Remove the 'Submit payment' button
                                                    $('#submit-button').remove();
                                                }
                                            });

                                            if (result.success) {
                                                $('#checkout-message').html(
                                                    '<h1>Success</h1><p>Your Drop-in UI is working! Check your <a href="https://sandbox.braintreegateway.com/login">sandbox Control Panel</a> for your test transactions.</p><p>Refresh to try another transaction.</p>'
                                                );
                                            } else {
                                                console.log(result);
                                                $('#checkout-message').html(
                                                    '<h1>Error</h1><p>Check your console.</p>');
                                            }
                                        });
                                    });
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

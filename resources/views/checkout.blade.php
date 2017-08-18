@extends('layouts.bestStore.bstore')

@section('content')
    <hr>
    <div class="container">
        <div class='row'>
            <div class='col-md-4'></div>
            <div class='col-md-4'>
                <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
                <div id='charge-error' class='alert alert-danger' {{Session::has('error') ? 'hidden' : ''}}></div>
                {{Session::get('error')}}
                <form accept-charset="UTF-8" action="{{route('checkout')}}" class="require-validation" id="checkout-form" method="post"><div style="margin:0;padding:0;display:inline"></div>
                    <div class='form-row'>
                        <div class='col-xs-12 form-group required'>
                            <label class='control-label'>Name on Card</label>
                            <input id='card-name' class='form-control' size='4' type='text'>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='col-xs-12 form-group card required'>
                            <label class='control-label'>Card Number</label>
                            <input id='card-number' autocomplete='off' class='form-control card-number' size='20' type='text'>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='col-xs-4 form-group cvc required'>
                            <label class='control-label'>CVC/CVV</label>
                            <input id='card-cvc' autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                        </div>
                        <div class='col-xs-4 form-group expiration required'>
                            <label class='control-label'>Expiration</label>
                            <input id='card-expiry-month' class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                        </div>
                        <div class='col-xs-4 form-group expiration required'>
                            <label class='control-label'> </label>
                            <input id='card-expiry-year' class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                        </div>
                    </div>

                    <div class='form-row'>
                        <div class='col-md-12 form-group'>
                            <button class='form-control btn btn-primary submit-button' type='submit'>Pay Rs. {{$total}}</button>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='col-md-12 error form-group hide'>
                            <div class='alert-danger alert'>
                                Please correct the errors and try again.
                            </div>
                        </div>
                    </div>
                    {{csrf_field()}}
                </form>
                <script>
                    Stripe.setPublishableKey('pk_test_ea4Eo3U7fTEjSQuiU8gvMhMY');

                    var $form = $('#checkout-form');

                    $form.submit(function(e){
                        $('#charge-error').addClass('hidden');
                        $form.find('button').prop('disabled', true);
                        Stripe.card.createToken({
                            name: $('#card-name').val(),
                            number: $('#card-number').val(),
                            cvc: $('#card-cvc').val(),
                            exp_month: $('#card-expiry-month').val(),
                            exp_year: $('#card-expiry-year').val()
                        }, stripeResponseHandler);
                        return false;
                    })
                    
                    function stripeResponseHandler(status, response) {
                        if(response.error){
                            $('#charge-error').removeClass('hidden');
                            $('#charge-error').text(response.error.message);
                            $form.find('button').prop('disabled', false);
                        }else {
                            var token = response.id;

                            $form.append($('<input type="hidden" name="StripeToken"/>').val(token));
                            console.log(token);
                            $form.get(0).submit();
                        }
                    }
                    
                </script>
            </div>
            <div class='col-md-4'></div>
        </div>
    </div>
@endsection
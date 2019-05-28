@extends('commerce.layout')

@section('content')
    <!-- End Cart Panel -->
    <!-- End Offset Wrapper -->
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(/commerce/images/bg/2.jpg) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Checkout</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="{{route('home.index')}}">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb-item active">Checkout</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Checkout Area -->

    <section class="our-checkout-area ptb--120 bg__white">
        @include('commerce.errors.errors')
    <form action="{{route('checkout.store')}}" method="POST" id="payment-form">
        @csrf
        <div class="container">
            <div class="row">
                <div class="form-group col-md-push-11">

                    <div class="ckeckout-left-sidebar">
                        <!-- Start Checkbox Area -->
                        <div class="checkout-form">
                            <h2 class="section-title-3">Billing details</h2>
                            <div class="checkout-form-inner">
                                <div class="single-checkout-box">
                                    <input type="text" id="name" name="name" placeholder=" Name*">
                                    <input type="text" name="username" placeholder="Username*">
                                </div>
                                <div class="single-checkout-box">
                                    <input type="text" id="email" name="email" placeholder="Email*">
                                    <input type="text" id="phone" name="phone" placeholder="Phone*">
                                </div>

                                <div class="single-checkout-box select-option mt--40">
                                    <input type="text" id="city" name="city" placeholder="City*">
                                    <input type="text" id="address" name="address" placeholder="Address*">
                                </div>
                                <div class="single-checkout-box">
                                    <input type="text" id="province" name="province" placeholder="province">
                                    <input type="text" id="postalcode" name="postalcode" placeholder="postal code">
                                </div>

                            </div>
                        </div>
                        <!-- End Checkbox Area -->

                        <!-- Start Payment Box -->
                        <div class="col-md-5">

                           <h3><a href="{{route('register.form')}}">Create Account</a></h3>

                            <div class="payment-form">
                                <h2 class="section-title-3">payment details</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur </p>
                                <div class="payment-form-inner">
                                    <input type="hidden" id="name_on_card"  name="name_on_card" placeholder="Name on Card*">
                                    <div class="single-checkout-box">
                                        <div class="form-row">
                                            <label for="card-element">
                                                Credit or debit card
                                            </label>
                                            <div id="card-element">
                                                <!-- A Stripe Element will be inserted here. -->
                                            </div>
                                            <!-- Used to display form errors. -->
                                            <div id="card-errors" role="alert"></div>
                                            <br>
                                            <button type="submit" id="complete-order" class="btn btn-outline-secondary">Complete Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

            </div>
        </div>

        </section>
    </form>
@endsection


@section('js')
    <script>
        // Create a Stripe client.
        var stripe = Stripe('pk_test_RD9urdtnGAZksNuNVZko1eLh00K1cAbYdd');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            var options = {
                name: document.getElementById('name_on_card').value,
                address_line1: document.getElementById('address').value,
                address_city: document.getElementById('city').value,
                address_state: document.getElementById('province').value,
                address_zip: document.getElementById('postalcode').value
            }


            stripe.createToken(card, options).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
             form.submit();
        }
    </script>
@endsection

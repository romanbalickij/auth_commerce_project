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
                        <div class="payment-form">
                            <h2 class="section-title-3">payment details</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur kgjhyt</p>
                            <div class="payment-form-inner">
                                <div class="single-checkout-box">
                                    <input type="text" placeholder="Name on Card*">
                                    <input type="text" placeholder="Card Number*">
                                </div>
                                <div class="single-checkout-box select-option">
                                    <select>
                                        <option>Date*</option>
                                        <option>Date</option>
                                        <option>Date</option>
                                        <option>Date</option>
                                        <option>Date</option>
                                    </select>
                                    <input type="text" placeholder="Security Code*">
                                </div>
                            </div>
                        </div>
                        <!-- End Payment Box -->
                        <!-- Start Payment Way -->
                        <div class="our-payment-sestem">
                            <h2 class="section-title-3">We  Accept :</h2>
                            <ul class="payment-menu">
                                <li><a href="#"><img src="images/payment/1.jpg" alt="payment-img"></a></li>
                                <li><a href="#"><img src="images/payment/2.jpg" alt="payment-img"></a></li>
                                <li><a href="#"><img src="images/payment/3.jpg" alt="payment-img"></a></li>
                                <li><a href="#"><img src="images/payment/4.jpg" alt="payment-img"></a></li>
                                <li><a href="#"><img src="images/payment/5.jpg" alt="payment-img"></a></li>
                            </ul>
                            <div class="checkout-btn">
                                <a class="ts-btn btn-light btn-large hover-theme" href="#">CONFIRM & BUY NOW</a>
                            </div>
                        </div>
                        <!-- End Payment Way -->
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

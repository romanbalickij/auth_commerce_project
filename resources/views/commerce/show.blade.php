@extends('commerce.layout')

@section('content')

    <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(/commerce/images/bg/2.jpg) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Product Details sticky</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="{{route('home.index')}}">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb-item active">sticky right</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Product Details -->
    <section class="htc__product__details pt--100 pb--100 bg__white">
        <div class="container">
            <div class="scroll-active">
                <div class="row">
                    <div class="col-md-7 col-lg-7 col-sm-5 col-xs-12">
                        <div class="product__details__container product-details-5">
                            <div class="scroll-single-product mb--30">

                                <img src="{{$product->getImage()}}" alt="full-image">
                            </div>

                        </div>
                    </div>
                    <div class="sidebar-active col-md-5 col-lg-5 col-sm-7 col-xs-12 xmt-30">
                        <div class="htc__product__details__inner ">
                            <div class="pro__detl__title">
                                <h2>{{$product->name}}</h2>
                            </div>
                            <div class="pro__dtl__rating">
                                <ul class="pro__rating">
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                </ul>
                                <span class="rat__qun">(Based on 0 Ratings)</span>
                            </div>
                            <div class="pro__details">
                                <p>
                                    {{$product->description}}
                                </p>
                            </div>
                            <ul class="pro__dtl__prize">
                                <li>{{$product->presentPrice()}}</li>
                            </ul>
                            <div class="pro__dtl__color">
                                <h2 class="title__5">Choose Colour</h2>
                            </div>

                            <ul class="pro__dtl__btn">
                                <li class="buy__now__btn">
                                <form action="{{route('cart.store')}}" method="POST">
                                    @csrf
                                    <div class="col-md-111 mb-105">
                                        <select class="form-control form-control-lg"  name="attribute_id">
                                            @foreach($attributes as $attribute)
                                                    <option value="{{$attribute->id}}">{{$attribute->name}}</option>
                                            @endforeach
                                        </select>
                                             <br>
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <input type="hidden" name="name" value="{{$product->name}}">
                                        <input type="hidden" name="price" value="{{$product->price}}">
                                        <button type="submit"  class="btn btn-secondary">Add To Cart</button>
                                    </div>
                                </form>
                                </li>
                            </ul>
                            <div class="pro__social__share">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Details -->
    <!-- Start Product tab -->
    <section class="htc__product__details__tab bg__white pb--120">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <ul class="product__deatils__tab mb--60" role="tablist">
                        <li role="presentation">
                            <a href="#reviews" role="tab" data-toggle="tab">Reviews</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="product__details__tab__content">
                        <!-- Start Single Content -->
                        <div role="tabpanel" id="description" class="product__tab__content fade in active">
                            <div class="product__description__wrap">
                            </div>
                        </div>
                        <!-- End Single Content -->
                        <!-- Start Single Content -->
                        <div role="tabpanel" id="reviews" class="product__tab__content fade">
                            <div class="review__address__inner">
                                <!-- Start Single Review -->
                                <div class="pro__review">
                                    <div class="review__thumb">
                                        <img src="images/review/1.jpg" alt="review images">
                                    </div>
                                    <div class="review__details">
                                        <div class="review__info">
                                            <h4><a href="#">Gerald Barnes</a></h4>
                                            <ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star-half"></i></li>
                                                <li><i class="zmdi zmdi-star-half"></i></li>
                                            </ul>
                                            <div class="rating__send">
                                                <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                                                <a href="#"><i class="zmdi zmdi-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="review__date">
                                            <span>27 Jun, 2016 at 2:30pm</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                    </div>
                                </div>
                                <!-- End Single Review -->
                                <!-- Start Single Review -->
                                <div class="pro__review ans">
                                    <div class="review__thumb">
                                        <img src="images/review/2.jpg" alt="review images">
                                    </div>
                                    <div class="review__details">
                                        <div class="review__info">
                                            <h4><a href="#">Gerald Barnes</a></h4>
                                            <ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star-half"></i></li>
                                                <li><i class="zmdi zmdi-star-half"></i></li>
                                            </ul>
                                            <div class="rating__send">
                                                <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                                                <a href="#"><i class="zmdi zmdi-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="review__date">
                                            <span>27 Jun, 2016 at 2:30pm</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                    </div>
                                </div>
                                <!-- End Single Review -->
                            </div>
                            <!-- Start RAting Area -->
                            <div class="rating__wrap">
                                <h2 class="rating-title">Write  A review</h2>
                                <h4 class="rating-title-2">Your Rating</h4>
                                <div class="rating__list">
                                    <!-- Start Single List -->
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                    </ul>
                                    <!-- End Single List -->
                                    <!-- Start Single List -->
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                    </ul>
                                    <!-- End Single List -->
                                    <!-- Start Single List -->
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                    </ul>
                                    <!-- End Single List -->
                                    <!-- Start Single List -->
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                    </ul>
                                    <!-- End Single List -->
                                    <!-- Start Single List -->
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                    </ul>
                                    <!-- End Single List -->
                                </div>
                            </div>
                            <!-- End RAting Area -->
                            <div class="review__box">
                                <form id="review-form">
                                    <div class="single-review-form">
                                        <div class="review-box name">
                                            <input type="text" placeholder="Type your name">
                                            <input type="email" placeholder="Type your email">
                                        </div>
                                    </div>
                                    <div class="single-review-form">
                                        <div class="review-box message">
                                            <textarea placeholder="Write your review"></textarea>
                                        </div>
                                    </div>
                                    <div class="review-btn">
                                        <a class="fv-btn" href="#">submit review</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Single Content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product tab -->
    <!-- Start Footer Area -->


@endsection

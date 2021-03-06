@extends('commerce.layout')

@section('content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
        @include('commerce.errors.errors')
        <div class="container">
            <div class="scroll-active">
                <div class="row">
                    <div class="col-md-7 col-lg-7 col-sm-5 col-xs-12">
                        <div class="product__details__container product-details-5">
                            <div class="scroll-single-product mb--30">

                                <img src="{{$product->getImage()}}" style="height: 670px; width: 650px" alt="full-image">
                            </div>

                        </div>
                    </div>
                    <div class="sidebar-active col-md-5 col-lg-5 col-sm-7 col-xs-12 xmt-30">
                        <div class="htc__product__details__inner ">
                            <div class="pro__detl__title">
                                <h2>{{$product->name}}</h2>
                            </div>
                            <form action="{{route('postStar', $product->id)}}" id="addStar" method="POST">
                                @csrf
                                <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5"
                                       data-step="1" value="{{ $product->averageRating }}" data-size="xs">
                                <input type="hidden" name="id" required="" value="{{ $product->id }}">
                                {{--                                <span class="review-no">{{$product->ratingPercent ( 10 )}} reviews</span>--}}
                                <br/>
                                <button type="submit" class="btn btn-success">Review</button>
                            </form>
                            <div class="pro__dtl__rating">
                                <div>
                                    <div class="badge badge-success">{{$product->getStock()}}</div>
                                </div>
                            </div>
                            <div class="pro__details">
                                <p>
                                    {!! $product->description !!}
                                </p>
                            </div>
                            <ul class="pro__dtl__prize">
                                <li>{{$product->presentPrice()}}</li>
                            </ul>
                            <ul class="pro__dtl__btn">
                                <li class="buy__now__btn">
                                <form action="{{route('cart.store')}}" method="POST">
                                    @csrf
                                    <div class="col-md-111 mb-105">
                                    @foreach($attributes as  $attribute)
                                        <h4>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1"> Choose {{$attribute->name}}</label>
                                            <select class="form-control" name="attributeValue[]" id="exampleFormControlSelect1">
                                                @foreach($productOptions as $productOption)
                                                @if($attribute->id == $productOption->attribute_id)
                                                    <option value="{{$productOption->id}}">{{$productOption->value}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        </h4>
                                    @endforeach
                                        </div>
                                        <br>
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <input type="hidden" name="name" value="{{$product->name}}">
                                        <input type="hidden" name="price" value="{{$product->price}}">
                                    @if($product->quantity > 0)
                                        <button type="submit"  class="btn btn-secondary">Add To Cart</button>
                                    @endif
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
    <!-- Start Product   Comments-->
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
                        <div role="tabpanel">
                            <div class="review__address__inner">
                                <!-- Show Comments  -->
                                @include('commerce.partial.comment_replies', ['comments' => $product->comments, 'product_id' => $product->id])
                            </div>
                        </div>
                        <!-- End Single Review -->
                    </div>
                    <!-- Start RAting Area -->

                    <!-- End RAting Area -->
                    <div class="review__box">
                        <div class="rating__wrap">
                            <h2 class="rating-title">Write  A review</h2>
                        </div>
                        <!-- Create Comments  -->
                        <form id="review-form"  method="post" action="{{route('comment.store')}}">
                            @csrf
                            <div class="single-review-form">
                                <div class="review-box name">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}" />
                                </div>
                            </div>
                            <div class="single-review-form">
                                <div class="review-box message">
                                    <textarea name="comment_body" placeholder="Write your review"></textarea>
                                </div>
                            </div>
                            <div class="review-btn">
                                @if(Auth::check())
                                     <button  class="btn btn-secondary" type="submit">review</button>
                                @else
                                     <h4>Please register to add a review</h4>
                                @endif
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

@endsection

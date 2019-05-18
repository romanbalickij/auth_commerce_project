@extends('commerce.layout')

@section('content')

    <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(/commerce/images/bg/2.jpg) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Shop Page</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="{{route('home.index')}}">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb-item active">Shop Page</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Our Product Area -->
    <section class="htc__product__area shop__page ptb--130 bg__white">
        <div class="container">
            <div class="htc__product__container">
                <!-- Start Product MEnu -->
                <div class="row">

                </div>

                <!-- End Product MEnu -->
                <div class="row">
                    <div class="product__list another-product-style">
                        <!-- Start Single Product -->
                       @foreach($products  as $product)
                             <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="{{$product->getImage()}}" alt="product images">
                                        </a>
                                    </div>
                                @include('commerce.partial.add_cart')
                                </div>
                                <div class="product__details">
                                    <h2><a href="{{route('show.product', $product->slug)}}">{{$product->name}}</a></h2>
                                    <ul class="product__price">
                                        <li class="new__price">{{$product->presentPrice()}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                       @endforeach
                        <!-- End Single Product -->
                        <!-- End Single Product -->
                    </div>
                </div>
                <!-- Start Load More BTn -->
                <div class="row mt--60">
                    <div class="col-md-12">
                        <div class="htc__loadmore__btn">
                            {{$products->links()}}
                        </div>
                    </div>
                </div>
                <!-- End Load More BTn -->
            </div>
        </div>
    </section>
@endsection

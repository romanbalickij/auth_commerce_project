@extends('commerce.layout')

@section('content')
    <div class="body__overlay"></div>
    <!-- Start Offset Wrapper -->
    <div class="offset__wrapper">
        <!-- Start Offset MEnu -->
        <div class="offsetmenu">
            <div class="offsetmenu__inner">
                <div class="offsetmenu__close__btn">
                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                </div>
                <div class="off__contact">
                    <div class="logo">
                        <a href="index.html">
                            <img src="/commerce/images/logo/logo.png" alt="logo">
                        </a>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetu adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                </div>
                <ul class="sidebar__thumd">
                    <li><a href="#"><img src="/commerce/images/sidebar-img/1.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="/commerce/images/sidebar-img/2.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="/commerce/images/sidebar-img/3.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="/commerce/images/sidebar-img/4.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="/commerce/images/sidebar-img/5.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="/commerce/images/sidebar-img/6.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="/commerce/images/sidebar-img/7.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="/commerce/images/sidebar-img/8.jpg" alt="sidebar images"></a></li>
                </ul>


            </div>
        </div>
        <!-- End Offset MEnu -->
    </div>
    <!-- End Offset Wrapper -->
    <!-- Start Slider Area -->
    <div class="slider__container slider--one">
        <div class="slider__activation__wrap owl-carousel owl-theme">
            <!-- Start Single Slide -->
            <div class="slide slider__full--screen" style="background: rgba(0, 0, 0, 0) url(/commerce/image/1.jpg) no-repeat scroll center center / cover ;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-lg-8 col-md-offset-2 col-lg-offset-4 col-sm-12 col-xs-12">
                            <div class="slider__inner">
                                <h1> New Product <span class="text--theme">Collection</span></h1>
                                <div class="slider__btn">
                                    <a class="htc__btn" href="{{route('shop.index')}}">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slide -->
            <!-- Start Single Slide -->
            <div class="slide slider__full--screen" style="background: rgba(0, 0, 0, 0) url(/commerce/image/2.jpg) no-repeat scroll center center / cover ;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                            <div class="slider__inner">
                                <h1>  New Product <span class="text--theme">Collection</span></h1>
                                <div class="slider__btn">
                                    <a class="htc__btn" href="{{route('shop.index')}}">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slide -->
        </div>
    </div>
    <!-- Start Slider Area -->

    <!-- Start Our Product Area -->
    <section class="htc__product__area ptb--130 bg__white">
        <div class="container">
            <div class="htc__product__container">
                <!-- Start Product MEnu -->

                <!-- End Product MEnu -->
                <div class="row">
                    <div class="product__list another-product-style">

                        <!-- Start Single Product -->
                        @foreach($products as $product)
                             <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="{{$product->getImage()}}" style="height: 370px;width: 510px" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        @include('commerce.partial.add_cart')
                                    </div>
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
            </div>
        </div>
{{--        {{$products->links()}}--}}
    </section>

@endsection
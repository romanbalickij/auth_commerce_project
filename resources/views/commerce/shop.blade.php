@extends('commerce.layout')

@section('content')
    <div class="wrapper fixed__footer">
        <!-- Start Header Style -->
        <!-- End Header Style -->
        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="#" method="POST">
                                    <input placeholder="Search here... " type="text">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->

        </div>
        <!-- End Offset Wrapper -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(/commerce/images/bg/2.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Shop Sidebar</h2>
                                <nav class="bradcaump-inner">
                                    <a class="breadcrumb-item" href="{{route('home.index')}}">Home</a>
                                    <span class="brd-separetor">/</span>
                                    <span class="breadcrumb-item active">Shop Sidebar</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Our ShopSide Area -->
        <section class="htc__shop__sidebar bg__white ptb--120">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="htc__shop__left__sidebar">
                            <!-- Start Range -->
                            <div class="htc-grid-range">
                                <h4 class="section-title-4">SORT BY</h4>
                                <div class="content-shopby">
                                    <div class="product__list__option">
                                        <div class="order-single-btn">
                                            <form action="{{route('shop.sort')}}" method="POST">
                                                @csrf
                                                <select class="select-color selectpicker" name="sort">
                                                    <option value="new product">New Product</option>
                                                    <option value="popular">Popular</option>
                                                    <option value="cheap">from cheap to expensive</option>
                                                    <option value="expensive">from expensive to cheap</option>
                                                </select>
                                                <button type="submit" class="btn btn-light" >sort</button>
                                            </div>
                                            </form>
                                        <div class="shp__pro__show">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Range -->
                            <!-- Start Product Cat -->
                            <div class="htc__shop__cat">
                                <h4 class="section-title-4">PRODUCT CATEGORIES</h4>
                                <ul class="sidebar__list">
                                    @foreach($categories as $category)
                                        <li><a href="{{route('shop.category', $category->slug)}}">{{$category->name}}
                                                <span>
                                                    {{$category->products()->count()}}
                                                </span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- End Product Cat -->
                            <!-- Start Color Cat -->
                            <div class="htc__shop__cat">
                                <h4 class="section-title-4">CHOOSE COLOUR</h4>
                                <ul class="sidebar__list">
                                    <li class="black"><a href="#"><i class="zmdi zmdi-circle"></i>Black<span>3</span></a></li>
                                    <li class="blue"><a href="#"><i class="zmdi zmdi-circle"></i>Blue <span>4</span></a></li>
                                    <li class="brown"><a href="#"><i class="zmdi zmdi-circle"></i>Brown <span>3</span></a></li>
                                    <li class="red"><a href="#"><i class="zmdi zmdi-circle"></i>Red <span>6</span></a></li>
                                    <li class="orange"><a href="#"><i class="zmdi zmdi-circle"></i>Orange <span>10</span></a></li>
                                </ul>
                            </div>
                            <!-- End Color Cat -->
                            <!-- Start Tag Area -->
                            <div class="htc__shop__cat">
                                <h4 class="section-title-4">Tags</h4>
                                <ul class="htc__tags">
                                    <li><a href="#">All</a></li>
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="#">Kids</a></li>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Stationery</a></li>
                                    <li><a href="#">Homelife</a></li>
                                    <li><a href="#">Appliances</a></li>
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="#">Baby</a></li>
                                    <li><a href="#">Beauty</a></li>
                                </ul>
                            </div>
                            <!-- End Tag Area -->
                        </div>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12 smt-30">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="producy__view__container">
                                    <!-- Start Short Form -->


                                    <!-- End List And Grid View -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="shop__grid__view__wrap another-product-style">
                                <!-- Start Single View -->
                                <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
                                    @forelse($products as $product)
                                        <!-- Start Single Product -->
                                           <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                                            <div class="product">
                                                <div class="product__inner">
                                                    <div class="pro__thumb">
                                                        <a href="#">
                                                            <img src="{{$product->getImage()}}" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="product__hover__info">
                                                        <ul class="product__action">
                                                            <li><a data-toggle="modal"  title="Quick View" class="quick-view modal-view detail-link"
                                                                   href="{{route('show.product', $product->slug)}}"><span class="ti-plus"></span></a></li>
                                                            <li><a title="Add To Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                            <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                                        </ul>
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
                                        <!-- End Single Product -->
                                    @endforeach
                                </div>
                                <!-- End Single View -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our ShopSide Area -->
        <!-- Start Footer Area -->

        <!-- End Footer Area -->
    </div>
@endsection
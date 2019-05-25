@extends('commerce.layout')

@section('content')
    <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(/commerce/images/bg/2.jpg) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Search Results</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="{{route('home.index')}}}">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb-item active">Search Results</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wishlist-area ptb--120 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="wishlist-content">
                        @if($products->isNotEmpty())
                            <div class="wishlist-table table-responsive">

                                {{$products->total()}}   result(s)
                                <table>
                                    <thead>
                                    <tr>

                                        <th class="product-thumbnail">Image</th>
                                        <th class="product-name"><span class="nobr">Product Name</span></th>
                                        <th class="product-price"><span class="nobr"> Unit Price </span></th>
                                        <th class="product-stock-stauts"><span class="nobr"> Stock Status </span></th>
                                        <th class="product-add-to-cart"><span class="nobr">Add To Cart</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td class="product-thumbnail"><a href="{{route('show.product', $product->slug)}}"><img src="{{$product->getImage()}}" alt="" /></a></td>
                                            <td class="product-name"><a href="{{route('show.product', $product->slug)}}">{{$product->name}}</a></td>
                                            <td class="product-price"><span class="amount">{{$product->presentPrice($product->price)}}</span></td>
                                            <td class="product-stock-status"><span class="wishlist-in-stock">тут буде остаток товару </span></td>
                                            <td class="product-add-to-cart">
                                                <form method="post" action="{{route('cart.store')}}">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$product->id}}">
                                                    <input type="hidden" name="name" value="{{$product->name}}">
                                                    <input type="hidden" name="price" value="{{$product->price}}">
                                                    <button type="submit" class="btn btn-outline-dark"> <span class="ti-shopping-cart"></span></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="6">
                                            <div class="wishlist-share">
                                                <h4 class="wishlist-share-title"></h4>
                                                <div class="social-icon">
                                                    <ul>
                                                        {{$products->links()}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                        @else
                           <h1>No product on your request</h1>
                            <a href="{{route('shop.index')}}">Сontinue shopping</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

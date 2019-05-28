@extends('commerce.layout')

@section('content')
    <!-- cart-main-area start -->
    <div class="cart-main-area ptb--120 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-name">Attributes</th>
                                    <th class="product-price">Total</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Delivery address</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    @foreach($order->products as $product)
                                    <tr>
                                        <td class="product-thumbnail"><a href="{{route('show.product',$product->slug)}}">
                                                <img src="{{$product->getImage()}}" alt="product img" /></a></td>
                                        <td class="product-name"><a href="{{route('show.product',$product->slug)}}">{{$product->name}}</a></td>
                                        <td class="product-price"><span class="amount">attributes</span></td>
                                        <td class="product-quantity">{{presentPrice($order->subtotal)}}</td>
                                        <td class="product-subtotal">{{$product->pivot->quantity}}</td>
                                        <td class="product-remove">
                                            <ul>
                                                <li>{{$order->name}}</li>
                                                <li>{{$order->email}}</li>
                                                <li>{{$order->phone}}</li>
                                                <li>{{$order->city}}</li>
                                                <li>{{$order->address}}</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-main-area end -->
@endsection


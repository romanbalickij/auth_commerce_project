@extends('commerce.layout')

@section('content')

    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(/commerce/images/bg/2.jpg) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Cart</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="{{route('home.index')}}">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb-item active">Cart</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- cart-main-area start -->
    <div class="cart-main-area ptb--120 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="table-content table-responsive">
                     @if(session()->has('success_message'))
                        <div class="alert alert-success">
                            {{session()->get('success_message')}}
                        </div>
                     @endif

                     @include('commerce.errors.errors')

                     @if(Cart::count() > 0)
                             <h2>{{Cart::count()}} Product(s) in Shopping Cart</h2>
                                <table>
                                    <thead>
                                    <tr>
                                        <th class="product-thumbnail">Image</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                             @foreach(Cart::content() as $product)
                                    <tr>
                                        <td class="product-thumbnail"><a href="{{route('show.product', $product->model->slug)}}"><img src="{{$product->model->getImage()}}" alt="product img" /></a></td>
                                        <td class="product-name"><a href="{{route('show.product', $product->model->slug)}}">{{$product->name}}</a></td>
                                        <td class="product-price"><span class="amount">{{$product->model->presentPrice()}}</span></td>
                                        <td class="product-quantity">
                                            <div>
                                                <select class="quantity" data-id="{{$product->rowId}}" data-productQuantity="{{$product->model->quantity}}">
                                                    @for($i =1; $i < 5 + 1; $i++)
                                                        <option {{$product->qty == $i ? 'selected' : ''}}>{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>

                                        </td>
                                        <td class="product-subtotal">{{presentPrice($product->subtotal())}}</td>
                                        <td class="product-remove">
                                            <form action="{{route('cart.destroy', $product->rowId)}}" method="Post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-outline-dark">X</button>
                                            </form>
                                        </td>
                                    </tr>
                              @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-7 col-xs-12">
                                <div class="buttons-cart">
                                    <a href="{{route('shop.index')}}">Continue Shopping</a>
                                </div>
                                <div class="coupon">
                                    <h3>Coupon</h3>
                                    <p>Enter your coupon code if you have one.</p>
                                    <form action="{{route('coupon')}}"  method="post">
                                        @csrf
                                        <input type="text" name="coupon" placeholder="Coupon code" />
                                        <input type="submit" value="Apply Coupon" />
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-5 col-xs-12">
                                <div class="cart_totals">
                                    <h2>Cart Totals</h2>
                                    <table>
                                        <tbody>
                                        @if(session()->has('coupon'))
                                        <tr class="cart-subtotal">
                                            <th>Discount</th>
                                            <td><span class="amount">-{{presentPrice(session()->get('coupon'))}}</span></td>
                                        </tr>
                                        @endif
                                        <ul id="shipping_method">

                                            <li></li>
                                        </ul>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td>
                                                <strong><span class="amount">{{presentPrice($newSubtotal)}}</span></strong>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="wc-proceed-to-checkout">
                                        <a href="checkout.html">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                     @else
                        <h1>No items in Cart!</h1>
                         <a href="{{route('shop.index')}}">Continue Shopping </a>
                     @endif
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        (function () {
            const classname = document.querySelectorAll('.quantity')

            Array.from(classname).forEach(function (element) {
                element.addEventListener('change', function () {
                    const id = element.getAttribute('data-id')
                    const productQuantity = element.getAttribute('data-productQuantity')

                    axios.patch(`/cart/${id}`, {
                        quantity: this.value,
                        productQuantity: productQuantity
                    })
                        .then(function (response) {
                               console.log(response);
                            window.location.href = '{{route('cart.index')}}'
                        })
                        .catch(function (error) {
                             console.log(error);
                            window.location.href = '{{route('cart.index')}}'
                        });
                })
            })
        })();
    </script>
@endsection



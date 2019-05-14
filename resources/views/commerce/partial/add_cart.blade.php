<div class="product__hover__info">
    <ul class="product__action">
        <li><a data-toggle="modal"  title="Quick View" class="quick-view modal-view detail-link"
               href="{{route('show.product', $product->slug)}}"><span class="ti-plus"></span></a></li>
        <li>
            <form action="{{route('cart.store')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$product->id}}">
                <input type="hidden" name="name" value="{{$product->name}}">
                <input type="hidden" name="price" value="{{$product->price}}">
                <a title="Add To Cart" href="cart.html"><span class="ti-shopping-cart"></span></a>
            </form>
        </li>

    </ul>
</div>
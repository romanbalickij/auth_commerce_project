<div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
    <nav class="mainmenu__nav hidden-xs hidden-sm">
        <ul class="main__menu">
            <li class="drop"><a href="{{route('home.index')}}">Home</a>

            </li>
            <li class="drop"><a href="blog.html">Blog</a>
                <ul class="dropdown">
                    <li><a href="blog.html">blog 3 column</a></li>
                    <li><a href="blog-2-col-rightsidebar.html">2 col right siderbar</a></li>
                    <li><a href="blog-details-left-sidebar.html"> blog details</a></li>
                </ul>
            </li>
            <li class="drop"><a href="{{route('shop.index')}}">Shop</a>

            </li>
        </ul>
    </nav>
</div>
<div class="col-md-2 col-sm-4 col-xs-3">
    <ul class="menu-extra">
        <li ><span class="ti-search"></span></li>
        <li><a href=""><span class="ti-user"></span></a></li>
        <a href="{{route('cart.index')}}">
            <li >
                <span class="ti-shopping-cart">
                     @if(Cart::instance('default')->count() > 0 )
                        {{Cart::instance('default')->count()}}
                     @endif
                </span>
            </li>
        </a>
    </ul>
</div>
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
            <li class="drop">

                <li><a href="">Logout</a></li>

                <li><a href="{{route('register.form')}}">Register</a></li>

                <li><a href="{{route('login.form')}}">Login</a></li>

                </li>
        </ul>

    </nav>
</div>
<div class="col-md-2 col-sm-4 col-xs-3">
    <ul class="menu-extra">
        <li class="search search__open hidden-xs"><span class="ti-search"></span></li>
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
<div class="offset__wrapper">
    <!-- Start Search Popap -->
    <div class="search__area">
        <div class="container" >
            <div class="row" >
                <div class="col-md-12" >
                    <div class="search__inner">
                        <form action="" method="get">
                            <input placeholder="Search here... " type="text" name="search">
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
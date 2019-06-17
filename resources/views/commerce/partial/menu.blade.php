<div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
    <nav class="mainmenu__nav hidden-xs hidden-sm">
        <ul class="main__menu">
            <li class="drop"><a href="{{route('home.index')}}">@lang('app.home')</a>
            </li>
            <li class="drop"><a href="{{route('shop.index')}}">@lang('app.shop')</a>
            </li>

            <li class="drop">
            @if(Auth::check())
                <li><a href="{{route('logout')}}">@lang('app.logout')</a></li>
            @else
                <li><a href="{{route('register.form')}}">@lang('app.register')</a></li>

                <li><a href="{{route('login.form')}}">@lang('app.login')</a></li>
            @endif
                </li>
                <li class="drop"><a href="#">@lang('app.language')</a>
                    <ul class="dropdown">
                        <li><a class="dropdown-item" href="lang/en">English</a></li>
                        <li><a class="dropdown-item" href="lang/fr">French</a></li>
                        <li><a class="dropdown-item" href="lang/ge">German</a></li>
                        <li><a class="dropdown-item" href="lang/es">Spanish</a></li>
                        <li><a class="dropdown-item" href="lang/in">Hindi</a></li>
                        <li><a class="dropdown-item" href="lang/uk">Uk</a></li>
                    </ul>
                </li>
        </ul>

    </nav>
</div>
<div class="col-md-2 col-sm-4 col-xs-3">
    <ul class="menu-extra">
        <li class="search search__open hidden-xs"><span class="ti-search"></span></li>
       @if(Auth::check())
           <li><a href="{{route('account.index')}}"><span class="ti-user"></span></a></li>
       @endif
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
   @include('commerce.partial.search_form')
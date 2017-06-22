
<!-- header -->
<div class="header">
    <div class="container">
        <div class="header-grid">
            <div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
                <ul>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:sales@beststore.com">sales@beststore.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+91 987 525 4477</li>
                    @if (Route::has('login'))
                        @if (Auth::check())
                            @if(Auth::user()->role)
                                @if(Auth::user()->role->name == "administrator")
                                    <li><a href="{{route('admin')}}">View Dashboard</a></li>
                                @endif
                            @endif
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ title_case(Auth::user()->name) }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="{{route('login')}}">Login</a></li>
                            <li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="{{route('register')}}">Register</a></li>

                        @endif
                    @endif
                </ul>
            </div>
            <div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/" target="_blank" class="facebook"></a></li>
                    <li><a href="https://twitter.com/" target="_blank" class="twitter"></a></li>
                    <li><a href="https://plus.google.com" target="_blank" class="g"></a></li>
                    <li><a href="https://www.instagram.com" target="_blank" class="instagram"></a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="logo-nav">
            <div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
                <h1><a href="/">Best Store <span>Shop anywhere</span></a></h1>
            </div>
            <div class="logo-nav-left1">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/" class="act">Home</a></li>
                            <!-- Mega Menu -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories<b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        @include('layouts.bestStore.partials.menu')
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="/mail">Mail Us</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="logo-nav-right">
                <div class="search-box">
                    <div id="sb-search" class="sb-search">
                        {!! Form::open(['method'=>'get', 'action'=>'StoreController@getSearch']) !!}
                            <input class="sb-search-input" name="keyword" placeholder="Enter your search term..." type="search" id="search">
                            <input class="sb-search-submit" type="submit" value="">
                            <span class="sb-icon-search"> </span>
                        {!! Form::close() !!}
                    </div>
                </div>
                <!-- search-scripts -->
                <script src="{{asset("/js/classie.js")}}"></script>
                <script src="{{asset("/js/uisearch.js")}}"></script>
                <script>
                    new UISearch( document.getElementById( 'sb-search' ) );
                </script>
                <!-- //search-scripts -->
            </div>
            <div class="header-right">
                <div class="cart box_1">
                    <a href="{{route('cart')}}">
                        <h3> <div class="total">
                                <span>Rs.{{Session::has('cart') ? Session::get('cart')->totalPrice : 0}}</span><span>({{Session::has('cart') ? Session::get('cart')->totalQty : 0}} Items)</span></div>
                            <img src="{{asset("/images/bag.png")}}" alt="" />
                        </h3>
                    </a>
                    <p><a href="{{route('emptyCart')}}" class="simpleCart_empty">Clear Cart</a></p>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //header -->
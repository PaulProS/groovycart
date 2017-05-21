<!-- Header -->
<div class="agileheader" id="agileitshome">

    <!-- Navigation -->
    <nav class="navbar navbar-default w3ls navbar-fixed-top">
        <div class="container">
            <div class="navbar-header wthree nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand agileinfo" href="/"><span>GROOVY</span> APPAREL</a>
                <ul class="w3header-cart">
                    <li class="wthreecartaits"><span class="my-cart-icon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i><span class="badge badge-notify my-cart-badge"></span></span></li>
                </ul>
            </div>
            <div id="bs-megadropdown-tabs" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">

                        @foreach($parentCategories as $parent)
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle w3-agile hyper" data-toggle="dropdown"><span>{{strtoupper($parent->name)}}</span></a>
                            <ul class="dropdown-menu aits-w3 multi multi1">
                                <div class="row">

                                    <div class="col-sm-3 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-1">
                                        <ul class="multi-column-dropdown">
                                            <li class="heading">FEATURED</li>
                                            <li><a href="mens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>New Arrivals</a></li>
                                            <li><a href="mens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Online Only</a></li>
                                            <li><a href="mens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Brands</a></li>
                                            <li><a href="mens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Clearance Sale</a></li>
                                            <li><a href="mens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Discount Store</a></li>
                                            <li><a href="mens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Editor's Pick</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-3 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-2">
                                        <p>TORSO</p>
                                        <a href="mens.html"><img src="images/men-nav-1.jpg" alt="Groovy Apparel"></a>
                                    </div>

                                    <div class="col-sm-3 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-3">
                                        <p>LEGS</p>
                                        <a href="mens.html"><img src="images/men-nav-2.jpg" alt="Groovy Apparel"></a>
                                    </div>

                                    <div class="col-sm-3 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-4">
                                        <p>ACCESSORIES</p>
                                        <a href="mens_accessories.html"><img src="images/men-nav-3.jpg" alt="Groovy Apparel"></a>
                                    </div>

                                    <div class="clearfix"></div>
                                    <p class="promo">Use Promo Code <span>#CFFGTY56</span> and take 30% off the products. <a href="#">Details</a></p>
                                </div>
                            </ul>
                        </li>

                        @endforeach

                    <li><a href="/about">ABOUT</a></li>
                    <li class="wthreesearch">
                        <form action="#" method="post">
                            <input type="search" name="Search" placeholder="Search for a Product" required="">
                            <button type="submit" class="btn btn-default search" aria-label="Left Align">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </li>
                    <li class="wthreecartaits wthreecartaits2 cart cart box_1">
                        <form action="#" method="post" class="last">
                            <input type="hidden" name="cmd" value="_cart" />
                            <input type="hidden" name="display" value="1" />
                            <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                        </form>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- //Navigation -->



    <!-- Header-Top-Bar-(Hidden) -->
    <div class="agileheader-topbar">
        <div class="container">
            <div class="col-md-6 agileheader-topbar-grid agileheader-topbar-grid1">
                <p>Free shipping on orders over $150. <a href="payment.html">Details</a></p>
            </div>
            <div class="col-md-6 agileheader-topbar-grid agileheader-topbar-grid2">
                <ul>
                    <li><a href="stores.html">Store Locator</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="codes.html">Codes</a></li>
                    <li><a href="icons.html">Icons</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    @if (Route::has('login'))
                        @if (Auth::check())
                            @if(Auth::user()->role)
                                @if(Auth::user()->role->name == "administrator")
                                    <li><a href="/admin">Dashboard</a></li>
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
                            <li>
                                <a class="popup-with-zoom-anim" href="#small-dialog1">Login</a>
                            </li>
                            <li>
                                <a class="popup-with-zoom-anim" href="#small-dialog2">Sign Up</a>
                            </li>
                        @endif
                    @endif
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>

        <!-- Popup-Box -->
        <div id="popup1">
            <div id="small-dialog1" class="mfp-hide agileinfo">
                <div class="pop_up">
                    @include('auth.login')
                </div>
            </div>
            <div id="small-dialog2" class="mfp-hide agileinfo">
                <div class="pop_up">
                    @include('auth.register')
                </div>
            </div>
        </div>
        <!-- //Popup-Box -->

    </div>
    <!-- //Header-Top-Bar-(Hidden) -->





</div>
<!-- //Header -->
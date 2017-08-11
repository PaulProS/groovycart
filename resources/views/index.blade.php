@extends('layouts.bestStore.bstore')
@section('content')
<!-- banner -->
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="banner">
    <div class="container">
        <div class="banner-info animated wow zoomIn" data-wow-delay=".5s">
            <h3>Free Online Shopping</h3>
            <h4>Up to <span>50% <i>Off/-</i></span></h4>
            <div class="wmuSlider example1">
                <div class="wmuSliderWrapper">
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-wrap">
                            <div class="banner-info1">
                                <p>T-Shirts + Formal Pants + Jewellery + Cosmetics</p>
                            </div>
                        </div>
                    </article>
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-wrap">
                            <div class="banner-info1">
                                <p>Toys + Furniture + Lighting + Watches</p>
                            </div>
                        </div>
                    </article>
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-wrap">
                            <div class="banner-info1">
                                <p>Tops + Books & Media + Sports</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <script src="{{asset("/js/jquery.wmuSlider.js")}}"></script>
            <script>
                $('.example1').wmuSlider();
            </script>
        </div>
    </div>
</div>
<!-- //banner -->
<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <div class="banner-bottom-grids">
            <div class="banner-bottom-grid-left">
                <div class="grid">
                    <figure class="effect-julia">
                        <img src="images/4.jpg" alt=" " class="img-responsive" />
                        <figcaption>
                            <h3>Best <span>Store</span><i> in online shopping</i></h3>
                            <div>
                                <p>Cupidatat non proident, sunt</p>
                                <p>Officia deserunt mollit anim</p>
                                <p>Laboris nisi ut aliquip consequat</p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="banner-bottom-grid-left1">
                <div class="banner-bottom-grid-left-grid left1-grid grid-left-grid1">
                    <div class="banner-bottom-grid-left-grid1">
                        <img src="images/1.jpg" alt=" " class="img-responsive" />
                    </div>
                    <div class="banner-bottom-grid-left1-pos">
                        <p>Discount 45%</p>
                    </div>
                </div>
                <div class="banner-bottom-grid-left-grid left1-grid grid-left-grid1">
                    <div class="banner-bottom-grid-left-grid1">
                        <img src="images/2.jpg" alt=" " class="img-responsive" />
                    </div>
                    <div class="banner-bottom-grid-left1-position">
                        <div class="banner-bottom-grid-left1-pos1">
                            <p>Latest New Collections</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-bottom-grid-right">
                <div class="banner-bottom-grid-left-grid grid-left-grid1">
                    <div class="banner-bottom-grid-left-grid1">
                        <img src="images/3.jpg" alt=" " class="img-responsive" />
                    </div>
                    <div class="grid-left-grid1-pos">
                        <p>top and classic designs <span>2016 Collection</span></p>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //banner-bottom -->
<!-- collections -->
<div class="new-collections">
    <div class="container">
        <h3 class="animated wow zoomIn" data-wow-delay=".5s">New Collections</h3>
        <p class="est animated wow zoomIn" data-wow-delay=".5s">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id est laborum.</p>
        <div class="new-collections-grids">

            @foreach($newCollection as $newArrival)
                <div class="col-md-3 new-collections-grid">
                    <div class="new-collections-grid1">
                        <div class="new-collections-grid1-image">
                            <a href="single.html" class="product-image"><img src="{{$newArrival->photo ? $newArrival->photo->photo : "http://placehold.it/50X50"}}" alt=" " class="img-responsive" /></a>
                            <div class="new-collections-grid1-image-pos">
                                <a href="{{route('product', $newArrival->id)}}">Quick View</a>
                            </div>
                            <div class="new-collections-grid1-right">
                                <div class="rating">
                                    <div class="rating-left">
                                        <img src="images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="images/1.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="images/1.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <h4><a href="{{route('product', $newArrival->id)}}">{{$newArrival['title']}}</a></h4>
                        <div class="addAlertN{{$newArrival->id}} alert alert-success collapse">
                            Product Added
                        </div>
                        <div class="new-collections-grid1-left simpleCart_shelfItem">
                            <p>Rs.{{$newArrival->price}}<span></span>
                                @if($newArrival->stock <= 0)
                                    {!! Form::button('Out Of Stock', ['class' => 'btn btn-warning'])!!}
                                @elseif($newArrival->stock > 0)
                                    {!! Form::submit('Add To Cart', ['class' => 'btn btn-warning', 'id' => 'addToCartNew'.$newArrival->id])!!}
                                @endif
                            </p>
                            <script>
                                $(document).ready(function () {
                                    $('#addToCartNew{{$newArrival->id}}').click(function() {
                                        $.ajax({
                                            url:"/add-to-cart/{{$newArrival->id}}",
                                            success:function(){
                                                $('#totalCartPrice').load(' #totalCartPrice');
                                                $('#totalCartQty').load(' #totalCartQty');
                                                $('.addAlertN{{$newArrival->id}}').show('fade');
                                                setTimeout(function () {
                                                    $('.addAlertN{{$newArrival->id}}').hide('fade');
                                                }, 3000);
                                                $('#addToCartNew{{$newArrival->id}}').hide();
                                            }
                                        });
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //collections -->
@if($featured)

<!-- new-timer -->
<div class="timer">
    <div class="container">
        <div class="timer-grids">
            <div class="col-md-8 timer-grid-left">
                <h3><a href="products.html">{{$featured->title}}</a></h3>
                <div class="rating">
                    <div class="rating-left">
                        <img src="images/2.png" alt=" " class="img-responsive" />
                    </div>
                    <div class="rating-left">
                        <img src="images/2.png" alt=" " class="img-responsive" />
                    </div>
                    <div class="rating-left">
                        <img src="images/2.png" alt=" " class="img-responsive" />
                    </div>
                    <div class="rating-left">
                        <img src="images/2.png" alt=" " class="img-responsive" />
                    </div>
                    <div class="rating-left">
                        <img src="images/1.png" alt=" " class="img-responsive" />
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="new-collections-grid1-left simpleCart_shelfItem timer-grid-left-price">
                    <p>Rs. <span class="item_price">{{$featured->price}}</span></p>
                    <h4>{{$featured->description}}</h4>
                    @if($featured->stock <= 0)
                        {!! Form::button('Out Of Stock', ['class' => 'btn btn-warning'])!!}
                    @elseif($featured->stock > 0)
                        {!! Form::submit('Add To Cart', ['class' => 'btn btn-warning', 'id' => 'addToCartNew'.$featured->id])!!}
                    @endif
                </div>
                <script>
                    $(document).ready(function () {
                        $('#addToCartNew{{$featured->id}}').click(function() {
                            $.ajax({
                                url:"/add-to-cart/{{$featured->id}}",
                                success:function(){
                                    $('#totalCartPrice').load(' #totalCartPrice');
                                    $('#totalCartQty').load(' #totalCartQty');
                                    $('.addAlertN{{$featured->id}}').show('fade');
                                    setTimeout(function () {
                                        $('.addAlertN{{$featured->id}}').hide('fade');
                                    }, 3000);
                                    $('#addToCartNew{{$featured->id}}').hide();
                                }
                            });
                        });
                    });
                </script>
                <div id="counter"> </div>
                <script src="{{asset("/js/jquery.countdown.js")}}"></script>
                <script src="{{asset("/js/script.js")}}"></script>
            </div>
            <div class="col-md-4 timer-grid-right">
                <div class="timer-grid-right1">
                    <img src="{{$featured->photo->photo}}" alt=" " class="img-responsive" />
                    <div class="timer-grid-right-pos">
                        <h4>Special Offer</h4>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //new-timer -->

@endif

<!-- collections-bottom -->
<div class="collections-bottom">
    <div class="container">
        <div class="collections-bottom-grids">
            <div class="collections-bottom-grid animated wow slideInLeft" data-wow-delay=".5s">
                <h3>45% Offer For <span>Women & Children's</span></h3>
            </div>
        </div>
        <div class="newsletter">
            <h3>Newsletter</h3>
            <p>Join us now to get all news and special offers.</p>
            {!! Form::open(['url' => 'subscribeMail', 'method' => 'POST']) !!}
            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
            {!! Form::email('email', null, ['placeholder' => 'Enter your email address', 'required']) !!}
            {!! Form::submit('Join Us') !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop

<!-- //collections-bottom -->


{{--@extends('layouts.groovy')--}}

{{--@section('content')--}}

    {{--<!-- Header-Slider -->--}}
    {{--<div class="w3slideraits">--}}
        {{--<div class="fluid_dg_wrap fluid_dg_emboss pattern_1 fluid_dg_white_skin" id="fluid_dg_wrap_4">--}}
            {{--<div data-thumb="images/slide-1-small.jpg" data-src="images/slide-1.jpg"></div>--}}
            {{--<div data-thumb="images/slide-2-small.jpg" data-src="images/slide-2.jpg"></div>--}}
            {{--<div data-thumb="images/slide-3-small.jpg" data-src="images/slide-3.jpg"></div>--}}
            {{--<div data-thumb="images/slide-4-small.jpg" data-src="images/slide-4.jpg"></div>--}}
            {{--<div data-thumb="images/slide-5-small.jpg" data-src="images/slide-5.jpg"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- //Header-Slider -->--}}
    {{--<!-- Model-Slider -->--}}
    {{--<div class="agilemodel-slider">--}}
        {{--<div id='film_roll_1'>--}}
            {{--<div><img src="/images/model_slide-1.jpg" alt="Groovy Apparel"></div>--}}
            {{--<div><img src="/images/model_slide-2.jpg" alt="Groovy Apparel"></div>--}}
            {{--<div><img src="/images/model_slide-3.jpg" alt="Groovy Apparel"></div>--}}
            {{--<div><img src="/images/model_slide-4.jpg" alt="Groovy Apparel"></div>--}}
            {{--<div><img src="/images/model_slide-5.jpg" alt="Groovy Apparel"></div>--}}
            {{--<div><img src="/images/model_slide-6.jpg" alt="Groovy Apparel"></div>--}}
            {{--<div><img src="/images/model_slide-7.jpg" alt="Groovy Apparel"></div>--}}
            {{--<div><img src="/images/model_slide-8.jpg" alt="Groovy Apparel"></div>--}}
            {{--<div><img src="/images/model_slide-9.jpg" alt="Groovy Apparel"></div>--}}
            {{--<div><img src="/images/model_slide-10.jpg" alt="Groovy Apparel"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- //Model-Slider -->--}}



    {{--<!-- Latest-Arrivals -->--}}
    {{--<div class="wthreehome-latest">--}}
        {{--<div class="container">--}}

            {{--<div class="wthreehome-latest-grids">--}}
                {{--<div class="col-md-6 wthreehome-latest-grid wthreehome-latest-grid1">--}}
                    {{--<div class="grid">--}}
                        {{--<figure class="effect-apollo">--}}
                            {{--<img src="/images/home-latest-1.jpg" alt="Groovy Apparel">--}}
                            {{--<figcaption></figcaption>--}}
                        {{--</figure>--}}
                    {{--</div>--}}
                    {{--<h4>DENIM TOPS</h4>--}}
                    {{--<h5>Lorem Ipsum Dolor Site Amet</h5>--}}
                    {{--<h6><a href="womens.html">Shop Now</a></h6>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 wthreehome-latest-grid wthreehome-latest-grid2">--}}
                    {{--<div class="grid">--}}
                        {{--<figure class="effect-apollo">--}}
                            {{--<img src="/images/home-latest-2.jpg" alt="Groovy Apparel">--}}
                            {{--<figcaption></figcaption>--}}
                        {{--</figure>--}}
                    {{--</div>--}}
                    {{--<h4>LEATHER JACKETS</h4>--}}
                    {{--<h5>Lorem Ipsum Dolor Site Amet</h5>--}}
                    {{--<h6><a href="womens.html">Shop Now</a></h6>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 wthreehome-latest-grid wthreehome-latest-grid3">--}}
                    {{--<div class="grid">--}}
                        {{--<figure class="effect-apollo">--}}
                            {{--<img src="/images/home-latest-3.jpg" alt="Groovy Apparel">--}}
                            {{--<figcaption></figcaption>--}}
                        {{--</figure>--}}
                    {{--</div>--}}
                    {{--<h4>WATCHES</h4>--}}
                    {{--<h5>Lorem Ipsum Dolor Site Amet</h5>--}}
                    {{--<h6><a href="womens_accessories.html">Shop Now</a></h6>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 wthreehome-latest-grid wthreehome-latest-grid4">--}}
                    {{--<div class="grid">--}}
                        {{--<figure class="effect-apollo">--}}
                            {{--<img src="/images/home-latest-4.jpg" alt="Groovy Apparel">--}}
                            {{--<figcaption></figcaption>--}}
                        {{--</figure>--}}
                    {{--</div>--}}
                    {{--<h4>BEACH WEAR</h4>--}}
                    {{--<h5>Lorem Ipsum Dolor Site Amet</h5>--}}
                    {{--<h6><a href="mens.html">Shop Now</a></h6>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="clearfix"></div>--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- //Latest-Arrivals -->--}}



    {{--<!-- Winter-Collection -->--}}
    {{--<div class="wthreewinter-coll">--}}
        {{--<div class="container">--}}
            {{--<h1>BRACE YOURSELVES! WINTER IS COMING...</h1>--}}
            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
            {{--<div class="wthreeshop-a">--}}
                {{--<a href="womens.html">SHOP WINTER COLLECTION</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- //Winter-Collection -->--}}



    {{--<!-- Denim-Collection -->--}}
    {{--<div class="wthreedenim-coll">--}}
        {{--<div class="style-grids">--}}
            {{--<div class="col-md-6 style-grid style-grid-1">--}}
                {{--<img src="/images/style-1.jpg" alt="Groovy Apparel">--}}
                {{--<div class="style-grid-1-text">--}}
                    {{--<h3>DENIM JEANS</h3>--}}
                    {{--<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.</p>--}}
                    {{--<div class="wthreeshop-a">--}}
                        {{--<a href="womens.html">SHOP DENIM COLLECTION</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-6 style-grid style-grid-2">--}}
                {{--<div class="style-image-1">--}}
                    {{--<img src="/images/style-2.jpg" alt="Groovy Apparel">--}}
                    {{--<div class="style-grid-2-text">--}}
                        {{--<h3>WATER REPELLENT</h3>--}}
                        {{--<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="style-image-2">--}}
                    {{--<img src="/images/style-3.jpg" alt="Groovy Apparel">--}}
                    {{--<div class="style-grid-2-text">--}}
                        {{--<h3>STITCHED TO PERFECTION</h3>--}}
                        {{--<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="clearfix"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- //Denim-Collection -->--}}



    {{--<!-- Clearance-Sale -->--}}
    {{--<div class="aitsclearance-sales">--}}
        {{--<div class="aitsclearance-sales-text">--}}
            {{--<h2>ALL CLEARANCE ITEMS</h2>--}}
            {{--<h4>BUY ONE AND GET ONE FREE</h4>--}}
            {{--<h5>50% OFF <small>On selected products<sup>*</sup></small></h5>--}}
            {{--<div class="wthreeshop-a">--}}
                {{--<a href="mens.html">SHOP NOW</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- //Clearance-Sale -->--}}



    {{--<!-- Shopping -->--}}
    {{--<div class="agileshopping">--}}
        {{--<div class="container">--}}

            {{--<div class="agileshoppinggrids">--}}
                {{--<div class="col-md-6 agileshoppinggrid agileshoppinggrid1">--}}
                    {{--<div class="grid">--}}
                        {{--<figure class="effect-apollo">--}}
                            {{--<img src="/images/mens.jpg" alt="Groovy Apparel">--}}
                            {{--<figcaption></figcaption>--}}
                        {{--</figure>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 agileshoppinggrid agileshoppinggrid2">--}}
                    {{--<div class="grid">--}}
                        {{--<figure class="effect-apollo">--}}
                            {{--<img src="/images/womens.jpg" alt="Groovy Apparel">--}}
                            {{--<figcaption></figcaption>--}}
                        {{--</figure>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
            {{--</div>--}}

            {{--<div class="agileshoppinggrids-bottom">--}}
                {{--<h3>CHOOSE THE BEST FOR YOU</h3>--}}
                {{--<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.</p>--}}
                {{--<div class="agileshoppinggrids-bottom-grids">--}}
                    {{--<div class="col-md-6 agileshoppinggrids-bottom-grid agileshoppinggrids-bottom-grid1">--}}
                        {{--<div class="wthreeshop-a">--}}
                            {{--<a href="mens.html">SHOP MEN</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6 agileshoppinggrids-bottom-grid agileshoppinggrids-bottom-grid2">--}}
                        {{--<div class="wthreeshop-a">--}}
                            {{--<a href="womens.html">SHOP WOMEN</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="clearfix"></div>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- //Shopping -->--}}



    {{--<!-- Newsletter -->--}}
    {{--<div class="agileinfonewsl">--}}

        {{--<h3>SIGN UP FOR NEWSLETTER</h3>--}}
        {{--<p>Subscribe to us to get highest-level access to our new styles and trends</p>--}}
        {{--<div class="wthreeshop-a">--}}
            {{--<a class="popup-with-zoom-anim" href="#small-dialog3">SUBSCRIBE</a>--}}
        {{--</div>--}}

        {{--<!-- Popup-Box -->--}}
        {{--<div id="popup2">--}}
            {{--<div id="small-dialog3" class="mfp-hide agileinfo">--}}
                {{--<div class="pop_up">--}}
                    {{--<h4>SUBSCRIBE</h4>--}}
                    {{--<form action="#" method="post">--}}
                        {{--<input class="email aitsw3ls" type="email" placeholder="Email" required="">--}}
                        {{--<input type="submit" class="submit" value="SUBSCRIBE">--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!-- //Popup-Box -->--}}

    {{--</div>--}}
    {{--<!-- //Newsletter -->--}}


    {{--@stop--}}
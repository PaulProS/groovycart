@extends('layouts.bestStore.bstore')

@section('content')

    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Products</li>
            </ol>
        </div>
    </div>
    <div class="products">
        <div class="container">
            <div class="col-md-4 products-left">
                <div class="filter-price animated wow slideInUp" data-wow-delay=".5s">
                    <h3>Filter By Price</h3>
                    <ul class="dropdown-menu1">
                        <li><a href="">
                                <div id="slider-range"></div>
                                <input type="text" id="amount" style="border: 0" />
                            </a></li>
                    </ul>
                    <script type='text/javascript'>//<![CDATA[
                        $(window).load(function(){
                            $( "#slider-range" ).slider({
                                range: true,
                                min: 0,
                                max: 100000,
                                values: [ 20000, 80000 ],
                                slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                                }
                            });
                            $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );


                        });//]]>
                    </script>
                    <script type="text/javascript" src="{{asset("/js/jquery-ui.min.js")}}"></script>
                    <!---->
                </div>
                <div class="categories animated wow slideInUp" data-wow-delay=".5s">
                    <h3>Categories</h3>
                    <ul class="cate">
                        <li><a href="products.html">Best Selling</a> <span>(15)</span></li>
                        <li><a href="products.html">Man</a> <span>(16)</span></li>
                        <ul>
                            <li><a href="products.html">Accessories</a> <span>(2)</span></li>
                            <li><a href="products.html">Coats & Jackets</a> <span>(5)</span></li>
                            <li><a href="products.html">Jeans</a> <span>(1)</span></li>
                            <li><a href="products.html">New Arrivals</a> <span>(0)</span></li>
                            <li><a href="products.html">Suits</a> <span>(1)</span></li>
                            <li><a href="products.html">Casual Shirts</a> <span>(0)</span></li>
                        </ul>
                        <li><a href="products.html">Sales</a> <span>(15)</span></li>
                        <li><a href="products.html">Woman</a> <span>(15)</span></li>
                        <ul>
                            <li><a href="products.html">Accessories</a> <span>(2)</span></li>
                            <li><a href="products.html">New Arrivals</a> <span>(0)</span></li>
                            <li><a href="products.html">Dresses</a> <span>(1)</span></li>
                            <li><a href="products.html">Casual Shirts</a> <span>(0)</span></li>
                            <li><a href="products.html">Shorts</a> <span>(4)</span></li>
                        </ul>
                    </ul>
                </div>
                <div class="new-products animated wow slideInUp" data-wow-delay=".5s">
                    <h3>New Products</h3>
                    <div class="new-products-grids">
                        <div class="new-products-grid">
                            <div class="new-products-grid-left">
                                <a href="single.html"><img src="{{asset("/images/6.jpg")}}" alt=" " class="img-responsive" /></a>
                            </div>
                            <div class="new-products-grid-right">
                                <h4><a href="single.html">occaecat cupidatat</a></h4>
                                <div class="rating">
                                    <div class="rating-left">
                                        <img src="{{asset("/images/2.png")}}" alt=" " class="img-responsive">
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{asset("/images/2.png")}}" alt=" " class="img-responsive">
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{asset("/images/2.png")}}" alt=" " class="img-responsive">
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{asset("/images/1.png")}}" alt=" " class="img-responsive">
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{asset("/images/1.png")}}" alt=" " class="img-responsive">
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="simpleCart_shelfItem new-products-grid-right-add-cart">
                                    <p> <span class="item_price">$180</span><a class="item_add" href="#">add to cart </a></p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="new-products-grid">
                            <div class="new-products-grid-left">
                                <a href="single.html"><img src="{{asset("/images/26.jpg")}}" alt=" " class="img-responsive" /></a>
                            </div>
                            <div class="new-products-grid-right">
                                <h4><a href="single.html">eum fugiat quo</a></h4>
                                <div class="rating">
                                    <div class="rating-left">
                                        <img src="{{asset("/images/2.png")}}" alt=" " class="img-responsive">
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{asset("/images/2.png")}}" alt=" " class="img-responsive">
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{asset("/images/2.png")}}" alt=" " class="img-responsive">
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{asset("/images/1.png")}}" alt=" " class="img-responsive">
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{asset("/images/1.png")}}" alt=" " class="img-responsive">
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="simpleCart_shelfItem new-products-grid-right-add-cart">
                                    <p> <span class="item_price">$250</span><a class="item_add" href="#">add to cart </a></p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="new-products-grid">
                            <div class="new-products-grid-left">
                                <a href="single.html"><img src="{{asset("/images/11.jpg")}}" alt=" " class="img-responsive" /></a>
                            </div>
                            <div class="new-products-grid-right">
                                <h4><a href="single.html">officia deserunt</a></h4>
                                <div class="rating">
                                    <div class="rating-left">
                                        <img src="{{asset("/images/2.png")}}" alt=" " class="img-responsive">
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{asset("/images/2.png")}}" alt=" " class="img-responsive">
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{asset("/images/2.png")}}" alt=" " class="img-responsive">
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{asset("/images/1.png")}}" alt=" " class="img-responsive">
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{asset("/images/1.png")}}" alt=" " class="img-responsive">
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="simpleCart_shelfItem new-products-grid-right-add-cart">
                                    <p> <span class="item_price">$259</span><a class="item_add" href="#">add to cart </a></p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="men-position animated wow slideInUp" data-wow-delay=".5s">
                    <a href="single.html"><img src="{{asset("/images/27.jpg")}}" alt=" " class="img-responsive" /></a>
                    <div class="men-position-pos">
                        <h4>Summer collection</h4>
                        <h5><span>55%</span> Flat Discount</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-8 products-right">
                <div class="products-right-grid">
                    <div class="products-right-grids animated wow slideInRight" data-wow-delay=".5s">
                        <div class="sorting">
                            <select id="country" onchange="change_country(this.value)" class="frm-field required sect">
                                <option value="null">Default sorting</option>
                                <option value="null">Sort by popularity</option>
                                <option value="null">Sort by average rating</option>
                                <option value="null">Sort by price</option>
                            </select>
                        </div>
                        <div class="sorting-left">
                            <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                                <option value="null">Item on page 9</option>
                                <option value="null">Item on page 18</option>
                                <option value="null">Item on page 32</option>
                                <option value="null">All</option>
                            </select>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="products-right-grids-position animated wow slideInRight" data-wow-delay=".5s">
                        <img src="{{asset("/images/18.jpg")}}" alt=" " class="img-responsive" />
                        <div class="products-right-grids-position1">
                            <h4>2016 New Collection</h4>
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum
                                necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae
                                non recusandae.</p>
                        </div>
                    </div>
                </div>
                <div class="products-right-grids-bottom">
                    <div class="col-md-4 products-right-grids-bottom-grid">
                       @foreach($products as $product)
                        <div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
                            <div class="new-collections-grid1-image">
                                <a href="single.html" class="product-image"><img src="{{asset("/images/19.jpg")}}" alt=" " class="img-responsive"></a>
                                <div class="new-collections-grid1-image-pos products-right-grids-pos">
                                    <a href="single.html">Quick View</a>
                                </div>
                                <div class="new-collections-grid1-right products-right-grids-pos-right">
                                    <div class="rating">
                                        <div class="rating-left">
                                            <img src="{{asset("/images/2.png")}}" alt=" " class="img-responsive">
                                        </div>
                                        <div class="rating-left">
                                            <img src="{{asset("/images/2.png")}}" alt=" " class="img-responsive">
                                        </div>
                                        <div class="rating-left">
                                            <img src="{{asset("/images/2.png")}}" alt=" " class="img-responsive">
                                        </div>
                                        <div class="rating-left">
                                            <img src="{{asset("/images/1.png")}}" alt=" " class="img-responsive">
                                        </div>
                                        <div class="rating-left">
                                            <img src="{{asset("/images/1.png")}}" alt=" " class="img-responsive">
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <h4><a href="single.html">{{$product->title}}</a></h4>
                            <p>{{$product->description}}</p>
                            <div class="simpleCart_shelfItem products-right-grid1-add-cart">
                                <p><i>${{$product->price}}</i> <span class="item_price">${{$product->price - 10}}</span><a class="item_add" href="#">add to cart </a></p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="clearfix"> </div>
                </div>
                <nav class="numbering animated wow slideInRight" data-wow-delay=".5s">
                    <ul class="pagination paging">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //breadcrumbs -->

@stop



{{--@extends('layouts.groovy')--}}

{{--@section('content')--}}

    {{--<!-- Banner -->--}}
    {{--@if($mainCat->name == 'Men')--}}
        {{--<div class="agileheader-banner w3mensaits">--}}
            {{--<img src="{{asset("/images/mens-banner.jpg")}}" alt="Groovy Apparel">--}}
        {{--</div>--}}
    {{--@endif--}}
    {{--@if($mainCat->name == 'Women')--}}
        {{--<div class="agileheader-banner w3mensaits">--}}
            {{--<img src="{{asset("/images/womens-banner.jpg")}}" alt="Groovy Apparel">--}}
        {{--</div>--}}
    {{--@endif--}}
    {{--<!-- //Banner -->--}}

    {{--<!-- Heading -->--}}
    {{--<h1 class="w3wthreeheadingaits">{{strtoupper($mainCat->name)}}</h1>--}}
    {{--<!-- //Heading -->--}}

    {{--<!-- Men's-Product-Display -->--}}
    {{--<div class="wthreeproductdisplay">--}}
        {{--<div id="cbp-pgcontainer" class="cbp-pgcontainer">--}}
            {{--<ul class="cbp-pggrid">--}}
                {{--@foreach($products as $product)--}}
                {{--<li class="wthree aits w3l">--}}
                    {{--<div class="cbp-pgcontent" id="men-8">--}}
                        {{--<span class="cbp-pgrotate"><i class="fa fa-exchange" aria-hidden="true"></i></span>--}}
                        {{--<a href="{{route('product', $product->id)}}">--}}
                            {{--<div class="cbp-pgitem a3ls">--}}
                                {{--<div class="cbp-pgitem-flip">--}}
                                    {{--<img height="300" src="{{$product->photo ? $product->photo->photo : ""}}" alt="Groovy Apparel">--}}
                                    {{--<img src="{{asset("/images/1-back.jpg")}}" alt="Groovy Apparel">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                        {{--<ul class="cbp-pgoptions w3l">--}}
                            {{--<li class="cbp-pgoptcompare">--}}
                                {{--<input type="checkbox" name="checkboxG8" id="checkboxG8" class="css-checkbox w3"><label for="checkboxG8" class="css-label"></label>--}}
                            {{--</li>--}}
                            {{--<li class="cbp-pgoptfav">--}}
                                {{--<span>5 <i class="fa fa-star" aria-hidden="true"></i></span>--}}
                            {{--</li>--}}
                            {{--<li class="cbp-pgoptsize agile">--}}
                                {{--<span data-size="XL">XL</span>--}}
                                {{--<div class="cbp-pgopttooltip">--}}
                                    {{--<span data-size="XL">XL</span>--}}
                                    {{--<span data-size="L">L</span>--}}
                                    {{--<span data-size="M">M</span>--}}
                                    {{--<span data-size="S">S</span>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="cbp-pgoptcart">--}}
                                {{--<form action="#" method="post">--}}
                                    {{--<input type="hidden" name="cmd" value="_cart">--}}
                                    {{--<input type="hidden" name="add" value="1">--}}
                                    {{--<input type="hidden" name="w3l_item" value="Sweater ">--}}
                                    {{--<input type="hidden" name="amount" value="25.00">--}}
                                    {{--<button type="submit" class="w3l-cart pw3l-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>--}}
                                    {{--<span class="w3-agile-line"> </span>--}}
                                    {{--<a href="#" data-toggle="modal" data-target="#myModal1"></a>--}}
                                {{--</form>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<a href="{{asset("mens_single.html")}}">--}}
                        {{--<div class="cbp-pginfo w3layouts">--}}
                            {{--<h3>{{$product->title}}</h3>--}}
                            {{--<span class="cbp-pgprice">{{$product->price}}</span>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- //Men's-Product-Display -->--}}

    {{--<!-- Newsletter -->--}}
    {{--@include('groovy.newsletter')--}}
    {{--<!-- //Newsletter -->--}}

{{--@endsection--}}

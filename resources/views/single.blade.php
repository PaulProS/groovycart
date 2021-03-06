@extends('layouts.bestStore.bstore')

@section('content')

    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1">
                <li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Single Page</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- single -->
    <div class="single">
        <div class="container">
            <div class="col-md-4 products-left">
                <div class="categories">
                    <h3>Categories</h3>
                    <ul class="cate">
                        <li><a href="#">Best Selling</a> <span>(15)</span></li>
                        <li><a href="#">Home Collections</a> <span>(16)</span></li>
                        <ul>
                            <li><a href="#">Cookware</a> <span>(2)</span></li>
                            <li><a href="#">New Arrivals</a> <span>(0)</span></li>
                            <li><a href="#">Home Decore</a> <span>(1)</span></li>
                        </ul>
                        <li><a href="#">Decorations</a> <span>(15)</span></li>
                        <ul>
                            <li><a href="#">Wall Clock</a> <span>(2)</span></li>
                            <li><a href="#">New Arrivals</a> <span>(0)</span></li>
                            <li><a href="#">Lighting</a> <span>(1)</span></li>
                            <li><a href="#">Top Brands</a> <span>(0)</span></li>
                        </ul>
                    </ul>
                </div>
                <div class="men-position animated wow slideInUp" data-wow-delay=".5s">
                    <a href="#"><img src="{{asset("/images/29.jpg")}}" alt=" " class="img-responsive" /></a>
                    <div class="men-position-pos">
                        <h4>Summer collection</h4>
                        <h5><span>55%</span> Flat Discount</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-8 single-right">
                <div class="col-md-5 single-right-left animated wow slideInUp" data-wow-delay=".5s">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="{{$product->photo->photo}}">
                                <div class="thumb-image"> <img src="{{$product->photo->photo}}" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            <li data-thumb="{{$product->photo->photo}}">
                                <div class="thumb-image"> <img src="{{$product->photo->photo}}" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            <li data-thumb="{{$product->photo->photo}}">
                                <div class="thumb-image"> <img src="{{$product->photo->photo}}" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                        </ul>
                    </div>
                    <!-- flixslider -->
                    <script defer src="{{asset("/js/jquery.flexslider.js")}}"></script>
                    <link rel="stylesheet" href="{{asset("/css/flexslider.css")}}" type="text/css" media="screen" />
                    <script>
                        // Can also be used with $(document).ready()
                        $(window).load(function() {
                            $('.flexslider').flexslider({
                                animation: "slide",
                                controlNav: "thumbnails"
                            });
                        });
                    </script>
                    <!-- flixslider -->
                </div>
                <div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight" data-wow-delay=".5s">
                    <h3>{{$product->title}}</h3>
                    <h4><span class="item_price">Rs.{{$product->price}}</span></h4>
                    <div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked>
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
                    </div>
                    <div class="description">
                        <h5><i>Description</i></h5>
                        <p>{{$product->description}}</p>
                        <p class="stock-left">In Stock : {{$product->stock}}</p>
                        {!! Form::label('Quantity : ', null, ['class' => 'order-stock']) !!}
                        {!! Form::text('Qty', 1, ['class' => 'order-stock']) !!}
                    </div>
                    <div class="addAlert alert alert-success collapse">
                        Product Added
                    </div>
                    <div class="occasion-cart">
                        <p>
                            @if($product->stock <= 0)
                                {!! Form::button('Out Of Stock', ['class' => 'btn btn-warning'])!!}
                            @elseif($product->stock > 0)
                                {!! Form::submit('Add To Cart', ['class' => 'btn btn-warning', 'id' => 'addToCart'])!!}
                            @endif
                        </p>
                        <script>
                            $(document).ready(function () {
                                $('#addToCart').click(function() {
                                    $.ajax({
                                        url:"/add-to-cart/{{$product->id}}",
                                        success:function(){
                                            $('#totalCartPrice').load(' #totalCartPrice');
                                            $('#totalCartQty').load(' #totalCartQty');
                                            $('.addAlert').show('fade');
                                            setTimeout(function () {
                                               $('.addAlert').hide('fade');
                                            }, 3000);
                                        }
                                    });
                                });
                            });
                        </script>
                    </div>
                    <div class="social">
                        <div class="social-left">
                            <p>Share On :</p>
                        </div>
                        <div class="social-right">
                            <ul class="social-icons">
                                <li><a href="#" class="facebook"></a></li>
                                <li><a href="#" class="twitter"></a></li>
                                <li><a href="#" class="g"></a></li>
                                <li><a href="#" class="instagram"></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
                <div class="bootstrap-tab animated wow slideInUp" data-wow-delay=".5s">
                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
                            <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Reviews({{count($product->review->where('approved', 1))}})</a></li>
                            <li role="presentation" class="dropdown">
                                <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Information <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                    <li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">cleanse</a></li>
                                    <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">fanny</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home" aria-labelledby="home-tab">
                                <h5>Product Brief Description</h5>
                                <p>{{$product->brief}}</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="profile" aria-labelledby="profile-tab">
                                <div class="bootstrap-tab-text-grids">
                                    @if($reviews = $product->review->where('approved',1))
                                        @foreach($reviews as $review)
                                            <div class="bootstrap-tab-text-grid">
                                                <div class="bootstrap-tab-text-grid-left">
                                                    <img src="{{$review->user_id ? $review->user->photo->photo : '/images/anouser.png'}}" alt=" " class="img-responsive" />
                                                </div>
                                                <div class="bootstrap-tab-text-grid-right">
                                                    <ul>
                                                        <li><a href="#">{{$review->subject}}</a></li>
                                                    </ul>
                                                    <p>{{$review->message}}</p>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="clearfix"> </div>

                                        @endforeach
                                    @endif
                                    <div class="add-review">
                                        <h4>add a review</h4>

                                        @if(Auth::guest())
                                        <?php $userId = 0; ?>
                                        @else
                                            <?php $userId = Auth::user()->id ?>
                                        @endif

                                        {!! Form::open(['method'=>'get', 'action'=>['StoreController@review', $product->id, $userId]]) !!}
                                        @if(Auth::guest())
                                            {!! Form::text('name', null, ['placeholder'=>'Name', 'required']) !!}
                                            {!! Form::email('email', null, ['placeholder'=>'Email', 'required']) !!}
                                        @endif
                                            {!! Form::text('subject', null, ['placeholder'=>'Subject', 'required', 'minlength' => 10]) !!}
                                            {!! Form::textarea('message', null, ['placeholder'=>'Message', 'required', 'rows'=>3, 'minlength' => 50]) !!}
                                            {!! Form::submit('Add Review') !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown1" aria-labelledby="dropdown1-tab">
                                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown2" aria-labelledby="dropdown2-tab">
                                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //single -->
    <!-- single-related-products -->
    <div class="single-related-products">
        <div class="container">
            <h3 class="animated wow slideInUp" data-wow-delay=".5s">Related Products</h3>
            <p class="est animated wow slideInUp" data-wow-delay=".5s">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
            <div class="new-collections-grids">
                <div class="col-md-3 new-collections-grid">
                    <div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".5s">
                        <div class="new-collections-grid1-image">
                            <a href="#" class="product-image"><img src="{{asset("/images/8.jpg")}}" alt=" " class="img-responsive"></a>
                            <div class="new-collections-grid1-image-pos">
                                <a href="#">Quick View</a>
                            </div>
                            <div class="new-collections-grid1-right">
                                <div class="rating">
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
                                    <div class="rating-left">
                                        <img src="{{asset("/images/1.png")}}" alt=" " class="img-responsive">
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <h4><a href="#">Running Shoes</a></h4>
                        <p>Vel illum qui dolorem eum fugiat.</p>
                        <div class="new-collections-grid1-left simpleCart_shelfItem">
                            <p><i>$280</i> <span class="item_price">$150</span><a class="item_add" href="#">add to cart </a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 new-collections-grid">
                    <div class="new-collections-grid1-sub">
                        <div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".6s">
                            <div class="new-collections-grid1-image">
                                <a href="#" class="product-image"><img src="{{asset("/images/6.jpg")}}" alt=" " class="img-responsive"></a>
                                <div class="new-collections-grid1-image-pos">
                                    <a href="#">Quick View</a>
                                </div>
                                <div class="new-collections-grid1-right">
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
                                            <img src="{{asset("/images/2.png")}}" alt=" " class="img-responsive">
                                        </div>
                                        <div class="rating-left">
                                            <img src="{{asset("/images/2.png")}}" alt=" " class="img-responsive">
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <h4><a href="#">Wall Lamp</a></h4>
                            <p>Vel illum qui dolorem eum fugiat.</p>
                            <div class="new-collections-grid1-left simpleCart_shelfItem">
                                <p><i>$480</i> <span class="item_price">$400</span><a class="item_add" href="#">add to cart </a></p>
                            </div>
                        </div>
                    </div>
                    <div class="new-collections-grid1-sub">
                        <div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".7s">
                            <div class="new-collections-grid1-image">
                                <a href="#" class="product-image"><img src="{{asset("/images/9.jpg")}}" alt=" " class="img-responsive"></a>
                                <div class="new-collections-grid1-image-pos">
                                    <a href="#">Quick View</a>
                                </div>
                                <div class="new-collections-grid1-right">
                                    <div class="rating">
                                        <div class="rating-left">
                                            <img src="{{asset("/images/2.png")}}" alt=" " class="img-responsive">
                                        </div>
                                        <div class="rating-left">
                                            <img src="{{asset("/images/1.png")}}" alt=" " class="img-responsive">
                                        </div>
                                        <div class="rating-left">
                                            <img src="{{asset("/images/1.png")}}" alt=" " class="img-responsive">
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
                            <h4><a href="#">Wall Lamp</a></h4>
                            <p>Vel illum qui dolorem eum fugiat.</p>
                            <div class="new-collections-grid1-left simpleCart_shelfItem">
                                <p><i>$280</i> <span class="item_price">$150</span><a class="item_add" href="#">add to cart </a></p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-3 new-collections-grid">
                    <div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".8s">
                        <div class="new-collections-grid1-image">
                            <a href="#" class="product-image"><img src="{{asset("/images/11.jpg")}}" alt=" " class="img-responsive"></a>
                            <div class="new-collections-grid1-image-pos">
                                <a href="#">Quick View</a>
                            </div>
                            <div class="new-collections-grid1-right">
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
                                        <img src="{{asset("/images/2.png")}}" alt=" " class="img-responsive">
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{asset("/images/1.png")}}" alt=" " class="img-responsive">
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <h4><a href="#">Stones Bangles</a></h4>
                        <p>Vel illum qui dolorem eum fugiat.</p>
                        <div class="new-collections-grid1-left simpleCart_shelfItem">
                            <p><i>$340</i> <span class="item_price">$257</span><a class="item_add" href="#">add to cart </a></p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //single-related-products -->

    <!-- zooming-effect -->
    <script src="{{asset("/js/imagezoom.js")}}"></script>
    <!-- //zooming-effect -->

@stop
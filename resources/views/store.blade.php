@extends('layouts.bestStore.bstore')

@section('content')

    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1">
                <li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Products</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->

    <div class="products">
        <div class="container">
            <div class="col-md-4 products-left">
                <div class="filter-price">
                    <h3>Filter By Price</h3>
                    {!! Form::open(['method'=>'get', 'action'=>'StoreController@filter', 'class'=>'form-group']) !!}
                    {!! Form::label('price', 'Min') !!}
                    {!! Form::text('minPrice', null, ['class'=>'form-control']) !!}
                    {!! Form::label('price', 'Max') !!}
                    {!! Form::text('maxPrice', null, ['class'=>'form-control']) !!}
                    {!! Form::submit('Filter', ['class'=>'form-control btn btn-warning']) !!}
                    {!! Form::close() !!}
                </div>
                <div class="categories">
                    <h3>Sub Categories</h3>
                    <ul class="cate">
                        @foreach($subCategories as $cat)
                            <li><a href="{{route('store', $cat->id)}}">{{title_case($cat->name)}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="new-products animated wow slideInUp" data-wow-delay=".5s">
                    <h3>New Products</h3>
                    <div class="new-products-grids">
                        @foreach($newProducts as $newArrival)
                            <div class="new-products-grid">
                                <div class="new-products-grid-left">
                                    <a href="{{route('product', $newArrival->id)}}"><img src="{{$newArrival->photo ? $newArrival->photo->photo : "http://placehold.it/50X50"}}" alt=" " class="img-responsive" /></a>
                                </div>
                                <div class="new-products-grid-right">
                                    <h4><a href="{{route('product', $newArrival->id)}}">{{$newArrival->title}}</a></h4>
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
                                    <div class="addAlertN{{$newArrival->id}} alert alert-success collapse">
                                        Product Added
                                    </div>
                                    <div class="simpleCart_shelfItem new-products-grid-right-add-cart">
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
                                                        }
                                                    });
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="men-position animated wow slideInUp" data-wow-delay=".5s">
                    <a href=""><img src="{{asset("/images/27.jpg")}}" alt=" " class="img-responsive" /></a>
                    <div class="men-position-pos">
                        <h4>Summer collection</h4>
                        <h5><span>55%</span> Flat Discount</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-8 products-right">
                <div class="products-right-grid">
                    <div class="products-right-grids">
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
                    <div class="products-right-grids-position">
                        <img src="{{$category->photo ? $category->photo->photo : ""}}" alt=" " class="img-responsive" />
                        <div class="products-right-grids-position1">
                            <h4>2017 New Collection</h4>
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum
                                necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae
                                non recusandae.</p>
                        </div>
                    </div>
                </div>
                <div class="products-right-grids-bottom">
                   @foreach($products as $product)
                        <div class="col-md-4 products-right-grids-bottom-grid">
                            <div class="new-collections-grid1 products-right-grid1">
                                <div class="new-collections-grid1-image">
                                    <a href="{{route('product', $product->id)}}" class="product-image"><img src="{{$product->photo ? $product->photo->photo : "http://www.placehold.it/50X50"}}" alt=" " class="img-responsive"></a>
                                    <div class="new-collections-grid1-image-pos products-right-grids-pos">
                                        <a href="{{route('product', $product->id)}}">Quick View</a>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="addAlert{{$product->id}} alert alert-success collapse">
                                    Product Added
                                </div>
                                <h4><a href="{{route('product', $product->id)}}">{{$product->title}}</a></h4>
                                <div class="simpleCart_shelfItem products-right-grid1-add-cart">
                                    <p><span class="item_price">Rs.{{$product->price}}</span><span></span>
                                        @if($product->stock <= 0)
                                            {!! Form::button('Out Of Stock', ['class' => 'btn btn-warning'])!!}
                                        @elseif($product->stock > 0)
                                        {!! Form::submit('Add To Cart', ['class' => 'btn btn-warning', 'id' => 'addToCart'.$product->id])!!}
                                        @endif
                                    </p>
                                    <script>
                                        $(document).ready(function () {
                                            $('#addToCart{{$product->id}}').click(function() {
                                                $.ajax({
                                                    url:"/add-to-cart/{{$product->id}}",
                                                    success:function(responseJson){
                                                        responseJson = JSON.parse(responseJson); //Converting string output to JSON format
                                                        $('#totalCartPrice').text(responseJson.totalPrice);
                                                        $('#totalCartQty').text(responseJson.totalQty);
                                                        $('.addAlert{{$product->id}}').show('fade');
                                                        setTimeout(function () {
                                                            $('.addAlert{{$product->id}}').hide('fade');
                                                        }, 3000);
                                                    }
                                                });
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="clearfix"></div>
                </div>
                {{$products->links()}}
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

@stop
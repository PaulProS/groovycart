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
                            $("#slider-range").slider({
                                range: true,
                                min: 0,
                                max: 100000,
                                values: [ 100, 10000 ],
                                slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                                }
                            });
                            $( "#amount" ).val( "$" + $("#slider-range").slider( "values", 0 ) + " - $" + $("#slider-range").slider( "values", 1 ) );

                        });//]]>
                    </script>
                    <script type="text/javascript" src={{asset("/js/jquery-ui.min.js")}}></script>
                    <!---->
                </div>

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
                <div class="new-products">
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
                <div class="men-position">
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
                            <select id="sortBy" onchange="change_sort(this.value)" class="frm-field required sect">
                                <option value=0>Default sorting</option>
                                <option value=1>Price: Low To High</option>
                                <option value=2>Price: High To Low</option>
                            </select>
                        </div>
                        <script>
                            function change_sort(sortBy) {
                                $.ajax({
                                    url: "/store/{{$category->id}}",
                                    data: { sortId: sortBy }
                                }).done(function (data) {
                                    $('.products-right-grids-bottom').html(data);
                                }).fail(function () {
                                    alert('Products could not be loaded.');
                                });
                            }

                            {{--function change_sort(sortBy){--}}
                                    {{--$.ajax({--}}
                                        {{--url: "/store/{{$category->id}}",--}}
                                        {{--data: { sortId: sortBy },--}}
                                        {{----}}
                                    {{--});--}}
                            {{--}--}}
                        </script>
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

                @include('partials.products')

            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <script type="text/javascript">
        $(function() {
            $('body').on('click', '.pagination a', function(e) {
                e.preventDefault();
                var url = $(this).attr('href');
                getProducts(url);
                window.history.pushState("", "", url);
            });
            function getProducts(url) {
                $.ajax({
                    url : url
                }).done(function (data) {
                    $('.products-right-grids-bottom').html(data);
                }).fail(function () {
                    alert('Products could not be loaded.');
                });
            }
        });
    </script>
@stop
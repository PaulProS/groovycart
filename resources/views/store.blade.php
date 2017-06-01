@extends('layouts.bestStore.bstore')

@section('content')

    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
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
                    {!! Form::open(['method'=>'get', 'action'=>'StoreController@filter', 'class'=>'form-group']) !!}
                    {!! Form::label('price', 'Min') !!}
                    {!! Form::text('minPrice', null, ['class'=>'form-control']) !!}
                    {!! Form::label('price', 'Max') !!}
                    {!! Form::text('maxPrice', null, ['class'=>'form-control']) !!}
                    {!! Form::submit('Filter', ['class'=>'form-control btn btn-warning']) !!}
                    {!! Form::close() !!}
                </div>
                <div class="categories animated wow slideInUp" data-wow-delay=".5s">
                    <h3>Categories</h3>
                    <ul class="cate">
                        <li><a href="">Best Selling</a> <span>(15)</span></li>
                        <li><a href="">Man</a> <span>(16)</span></li>
                        <ul>
                            <li><a href="">Accessories</a> <span>(2)</span></li>
                            <li><a href="">Coats & Jackets</a> <span>(5)</span></li>
                            <li><a href="">Jeans</a> <span>(1)</span></li>
                            <li><a href="">New Arrivals</a> <span>(0)</span></li>
                            <li><a href="">Suits</a> <span>(1)</span></li>
                            <li><a href="">Casual Shirts</a> <span>(0)</span></li>
                        </ul>
                        <li><a href="">Sales</a> <span>(15)</span></li>
                        <li><a href="">Woman</a> <span>(15)</span></li>
                        <ul>
                            <li><a href="">Accessories</a> <span>(2)</span></li>
                            <li><a href="">New Arrivals</a> <span>(0)</span></li>
                            <li><a href="">Dresses</a> <span>(1)</span></li>
                            <li><a href="">Casual Shirts</a> <span>(0)</span></li>
                            >Shorts</a> <span>(4)</span></li>
                        </ul>
                    </ul>
                </div>
                <div class="new-products animated wow slideInUp" data-wow-delay=".5s">
                    <h3>New Products</h3>
                    <div class="new-products-grids">
                        @foreach($newProducts as $newArrival)
                            <div class="new-products-grid">
                                <div class="new-products-grid-left">
                                    <a href=""><img src="{{$newArrival->photo ? $newArrival->photo->photo : "http://placehold.it/50X50"}}" alt=" " class="img-responsive" /></a>
                                </div>
                                <div class="new-products-grid-right">
                                    <h4><a href="">{{$newArrival->title}}</a></h4>
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
                                        <p><i>${{$newArrival->price}}</i>
                                            {!! Form::open(['method'=>'get', 'action' => ['StoreController@addToCart', $newArrival->id]]) !!}
                                            {!! Form::submit('Add To Cart', ['class' => 'btn btn-warning'])!!}
                                            {!! Form::close() !!}
                                        </p>
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
                            <div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
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
                                <h4><a href="{{route('product', $product->id)}}">{{$product->title}}</a></h4>
                                <p>{{$product->description}}</p>
                                <div class="simpleCart_shelfItem products-right-grid1-add-cart">
                                    <p><i>${{$product->price}}</i> <span class="item_price">${{$product->price - 10}}</span>
                                        {!! Form::open(['method'=>'get', 'action' => ['StoreController@addToCart', $product->id]]) !!}
                                        {!! Form::submit('Add To Cart', ['class' => 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="clearfix"></div>
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

@stop
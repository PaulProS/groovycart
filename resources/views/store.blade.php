@extends('layouts.groovy')

@section('content')

    <!-- Banner -->
    @if($mainCat->name == 'Men')
        <div class="agileheader-banner w3mensaits">
            <img src="{{asset("/images/mens-banner.jpg")}}" alt="Groovy Apparel">
        </div>
    @endif
    @if($mainCat->name == 'Women')
        <div class="agileheader-banner w3mensaits">
            <img src="{{asset("/images/womens-banner.jpg")}}" alt="Groovy Apparel">
        </div>
    @endif
    <!-- //Banner -->

    <!-- Heading -->
    <h1 class="w3wthreeheadingaits">{{strtoupper($mainCat->name)}}</h1>
    <!-- //Heading -->

    <!-- Men's-Product-Display -->
    <div class="wthreeproductdisplay">
        <div id="cbp-pgcontainer" class="cbp-pgcontainer">
            <ul class="cbp-pggrid">
                @foreach($products as $product)
                <li class="wthree aits w3l">
                    <div class="cbp-pgcontent" id="men-8">
                        <span class="cbp-pgrotate"><i class="fa fa-exchange" aria-hidden="true"></i></span>
                        <a href="{{route('product', $product->id)}}">
                            <div class="cbp-pgitem a3ls">
                                <div class="cbp-pgitem-flip">
                                    <img height="300" src="{{$product->photo ? $product->photo->photo : ""}}" alt="Groovy Apparel">
                                    <img src="{{asset("/images/1-back.jpg")}}" alt="Groovy Apparel">
                                </div>
                            </div>
                        </a>
                        <ul class="cbp-pgoptions w3l">
                            <li class="cbp-pgoptcompare">
                                <input type="checkbox" name="checkboxG8" id="checkboxG8" class="css-checkbox w3"><label for="checkboxG8" class="css-label"></label>
                            </li>
                            <li class="cbp-pgoptfav">
                                <span>5 <i class="fa fa-star" aria-hidden="true"></i></span>
                            </li>
                            <li class="cbp-pgoptsize agile">
                                <span data-size="XL">XL</span>
                                <div class="cbp-pgopttooltip">
                                    <span data-size="XL">XL</span>
                                    <span data-size="L">L</span>
                                    <span data-size="M">M</span>
                                    <span data-size="S">S</span>
                                </div>
                            </li>
                            <li class="cbp-pgoptcart">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3l_item" value="Sweater ">
                                    <input type="hidden" name="amount" value="25.00">
                                    <button type="submit" class="w3l-cart pw3l-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                                    <span class="w3-agile-line"> </span>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <a href="{{asset("mens_single.html")}}">
                        <div class="cbp-pginfo w3layouts">
                            <h3>{{$product->title}}</h3>
                            <span class="cbp-pgprice">$25</span>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- //Men's-Product-Display -->



    <!-- Newsletter -->
    @include('newsletter')
    <!-- //Newsletter -->



@endsection

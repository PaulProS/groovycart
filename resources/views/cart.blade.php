@extends('layouts.bestStore.bstore')

@section('content')


    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Checkout Page</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->

    @if(!session('cart'))

        <div class="checkout">
            <div class="checkout-left-basket">
                <h4>Cart Is Empty</h4>

            </div>
            <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                <a href="/"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
            </div>
            <div class="clearfix"> </div>
        </div>
    @endif

    @if(session('cart'))

        <!-- checkout -->
        <div class="checkout">
            <div class="container">
                <div class="checkout-right">
                    <table class="timetable_sub">
                        <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Remove</th>
                        </tr>
                        </thead>
                        <?php $i = 0?>
                        @foreach($products as $product)
                            <?php $i++ ?>
                            <tr class="rem{{$i}}">
                                <td class="invert">{{$i}}</td>
                                <td class="invert-image"><a href="{{route('product', $product['item']['id'])}}"><img src="{{$product['item']['photo']->photo ? $product['item']['photo']->photo : "http://placehold.it/40X40"}}" alt=" " class="img-responsive" /></a></td>
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus minus{{$i}}">&nbsp;</div>
                                            <div class="entry value inCart{{$i}}"><span>{{$product['qty']}}</span></div>
                                            <div class="entry value-plus plus{{$i}}">&nbsp;</div>
                                        </div>
                                        <!--quantity-->
                                        <script>
                                            $(document).ready(function () {
                                                $('.plus{{$i}}').on('click', function () {
                                                    $.ajax({
                                                        url: "increaseByOne/{{$product['item']['id']}}",
                                                        success:function (responseJson) {
                                                            responseJson = JSON.parse(responseJson);  // converting string response to jason
                                                            cartItem = responseJson.items["{{$product['item']['id']}}"]; // responseJason.items["2"]
                                                            $('.inCart{{$i}} > span').text(cartItem.qty);
                                                            $('#billingValue').text(responseJson.totalPrice);
                                                            $('.item-price{{$i}}').text(cartItem.price * cartItem.qty);
                                                            $('#totalCartPrice').text(responseJson.totalPrice);
                                                            $('#totalCartQty').text(responseJson.totalQty);
                                                        }
                                                    });
                                                });

                                                $('.minus{{$i}}').on('click', function () {
                                                    $.ajax({
                                                        url: "decreaseByOne/{{$product['item']['id']}}",
                                                        success:function (responseJson) {
                                                            responseJson = JSON.parse(responseJson); //Converting string response to json
                                                            cartItem = responseJson.items["{{$product['item']['id']}}"]; //responseJson.items["2"];
                                                            $('.inCart{{$i}} > span').text(cartItem.qty);
                                                            $('#billingValue').text(responseJson.totalPrice);
                                                            $('.item-price{{$i}}').text(cartItem.price * cartItem.qty);
                                                            $('#totalCartPrice').text(responseJson.totalPrice);
                                                            $('#totalCartQty').text(responseJson.totalQty);
                                                        }
                                                    });
                                                });

                                            });
                                        </script>
                                        <!--quantity-->
                                    </div>
                                </td>
                                <td class="invert">{{$product['item']['title']}}</td>
                                <td class="invert item-price{{$i}}">{{$product['item']['price'] * $product['qty']}}</td>
                                <td class="invert">
                                    <div class="rem">
                                        {{Form::submit('X', ['class' => 'btn btn-danger', 'id' => 'close'.$i])}}
                                    </div>
                                    <script>
                                        $(document).ready(function() {
                                            $('#close{{$i}}').on('click', function(){
                                                $.ajax({
                                                    url: "/deleteCartItem/{{$product['item']['id']}}",
                                                    success:function (responseJson) {
                                                        responseJson = JSON.parse(responseJson); //Converting string response to json
                                                        $('.rem{{$i}}').fadeOut('slow', function(){
                                                            $('.rem{{$i}}').remove();
                                                            $('#totalCartPrice').text(responseJson.totalPrice);
                                                            $('#totalCartQty').text(responseJson.totalQty);
                                                            $('#billingValue').text(responseJson.totalPrice);
                                                      });
                                                    }
                                                });
                                            });
                                        });
                                    </script>
                                </td>
                            </tr>
                    @endforeach
                    </table>
                </div>
                <div class="checkout-left">
                    <div class="checkout-left-basket">
                        <a href="{{route('checkout')}}"><h4>Proceed To Pay</h4></a>
                        <ul>
                            <li>Total Payable Amount : <span id="billingValue">{{session()->get('cart')->totalPrice}}</span></li>
                        </ul>
                    </div>

                    <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                        <a href=""><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Shop More Products</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //checkout -->

    @endif


@stop
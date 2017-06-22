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
                <div class="checkout-right animated wow slideInUp" data-wow-delay=".5s">
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
                                            <div class="entry value-minus">&nbsp;</div>
                                            <div class="entry value"><span>{{$product['qty']}}</span></div>
                                            <div class="entry value-plus active">&nbsp;</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="invert">{{$product['item']['title']}}</td>
                                <td class="invert">${{$product['item']['price'] * $product['qty']}}</td>
                                <td class="invert">
                                    <div class="rem">
                                        {{Form::submit('X', ['class' => 'btn btn-danger', 'id' => 'close'.$i])}}
                                        {{--<a href="{{route('deleteCartItem', $product['item']['id'])}}" class="btn btn-danger">X</a>--}}
                                    </div>
                                    <script>
                                        $(document).ready(function() {
                                            $('#close{{$i}}').on('click', function(){
                                                $.ajax({
                                                    url: "/deleteCartItem/{{$product['item']['id']}}",
                                                    success:function () {
                                                        $('.rem{{$i}}').fadeOut('slow', function(){
                                                            $('.rem{{$i}}').remove();
                                                            $('#totalCartPrice').load(' #totalCartPrice');
                                                            $('#totalCartQty').load(' #totalCartQty');
                                                            $('#discount').load(' #discount');
                                                            $('#billingValue').load(' #billingValue');
                                                        });
                                                    }
                                                })
                                            });
                                        });
                                    </script>
                                </td>
                            </tr>
                    @endforeach

                    <!--quantity-->
                        <script>
                            $('.value-plus').on('click', function(){
                                var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
                                divUpd.text(newVal);
                            });

                            $('.value-minus').on('click', function(){
                                var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
                                if(newVal>=1) divUpd.text(newVal);
                            });
                        </script>
                        <!--quantity-->
                    </table>
                </div>
                <div class="checkout-left">
                    <div class="checkout-left-basket">
                        <h4>Continue to basket</h4>
                        <ul>
                            <li>Service Charges @ 15% <i>-</i> <span id="discount">${{(session()->get('cart')->totalPrice)*15/100}}</span></li>
                            <li>Total <i>-</i> <span id="billingValue">${{session()->get('cart')->totalPrice + (session()->get('cart')->totalPrice)*15/100}}</span></li>
                        </ul>
                    </div>
                    <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                        <a href=""><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //checkout -->

    @endif


@stop
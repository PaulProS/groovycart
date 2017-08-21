@extends('layouts.bestStore.bstore')

@section('content')
    @if (session('orderMsg'))
        <div class="alert alert-success">
            {{ session('orderMsg') }}
        </div>
    @endif
    <hr>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>Orders History</h3>
            <hr>
            @foreach($orders as $order)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h5>Order ID : {{$order->id}}
                        <ul class="list-group">
                            @foreach($order->cart->items as $item)
                                <li class="list-group-item">
                                <span class="badge">Rs {{$item['price']}}</span>
                                {{$item['item']['title']}} | Qty :{{$item['qty']}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <strong>Total Price : {{$order->cart->totalPrice}}</strong>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
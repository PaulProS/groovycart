@extends('layouts.admin')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->user->name}}</td>
                        <td>{{$order->address}}</td>
                        @if($order->status == 0)
                            <td>To Be Processed</td>
                        @endif
                        <td>
                            <select name="orderAction" id="orderActionChange"></select>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop
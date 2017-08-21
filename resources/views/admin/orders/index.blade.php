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
                    <th>Order On</th>
                    <th>Action</th>
                </tr>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->user->name}}</td>
                        <td>{{$order->address}}</td>
                        @if($order->status == 0)
                            <td><span class="label label-warning">Pending</span></td>
                        @endif
                        <td>{{$order->created_at}}</td>
                        <td>
                            <a class="btn btn-block btn-info btn-xs" href="">Process</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop
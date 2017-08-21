@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Welcome {{title_case(Auth::user()->name)}}</h3>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{$orderTotal}}</h3>
                        <p>New Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->

@stop
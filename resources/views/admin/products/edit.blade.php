@extends('layouts.admin')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Create New Product</h3>
        </div>
        <!-- /.box-header -->

    </div>
    <div class="row">
        <div class="col-md-9">
            {!! Form::model($product, ['method'=>'PATCH', 'action' => ['AdminProductsController@update', $product->id], 'files' => true, 'class' => 'form-horizontal']) !!}
            <div class="form-group">
                {!! Form::label('title', 'Title', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('title', null, ['class'=>'form-control', 'placeholder' => 'Product Title', 'required']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Category', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::select('category_id', [0 => 'No Category'], null, ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::textarea('description',null , ['class'=>'form-control', 'rows' => 2, 'required']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('is_active', 'Status', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::select('is_active', [1 => 'Active', 0 => 'Not Active'], null, ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('stock', 'Stock', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::number('stock', null, ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    {!! Form::file('photo') !!}
                    <p class="help-block">Choose a product picture</p>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
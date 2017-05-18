@extends('layouts.admin')

@section('content')


    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Products List</h3>

            <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tr>
                    <th>ID</th>
                    <th></th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Last Updated</th>
                    <th>Status</th>
                    <th>Stock</th>
                </tr>
                @foreach($products as $product)

                    <tr>
                        <td>{{$product->id}}</td>
                        <td><img height="25" src="{{$product->photo ? $product->photo->photo : "http://placehold.it/400X400"}}" alt=""></td>
                        <td>{{$product->title}}</td>
                        <td></td>
                        <td>{{$product->description}}</td>
                        <td>{{ Carbon\Carbon::parse($product->created_at)->format('d-m-Y') }}</td>
                        <td>{{ Carbon\Carbon::parse($product->updated_at)->format('d-m-Y') }}</td>
                        <td><span class="{{$product->is_active == 1 ? 'label label-success' : 'label label-warning'}}">{{$product->is_active == 1 ? 'Active' : 'Not Active'}}</span></td>
                        <td>{{$product->stock}}</td>

                        <td><a class="btn btn-block btn-primary btn-xs" href="{{route('products.edit', $product->id)}}">Edit</a></td>

                        <td>
                            {!! Form::open(['method' => 'DELETE', 'action' => ['AdminProductsController@destroy', $product->id]]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger btn-xs']) !!}
                            {!! Form::close() !!}
                        </td>

                    </tr>

                @endforeach

            </table>
        </div>
    </div>
@stop
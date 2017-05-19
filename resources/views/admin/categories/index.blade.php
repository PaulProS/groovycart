@extends('layouts.admin')

@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Categories List</h3>
            <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="box box-primary">
                <div class="box-body box-profile">
                    {!! Form::open(['action' => ['AdminCategoriesController@store'], 'class' => 'form-horizontal']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'New', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('parent_id', 'In', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::select('parent_id',['' => 'Choose Category'] + $selectParent, null , ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            {!! Form::submit('Create Category', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>

            <section class="sidebar">
                <ul class="sidebar-menu">
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-share"></i> <span>Categories Tree</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            @foreach($parentCategories as $category)
                                <li><a href="#">{{$category->name}}
                                        <span class="pull-right-container">
                                      <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                    </a>
                                    @if(count($category->children))
                                            @include('admin.categories.manageChild',['children' => $category->children])
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </section>


        </div>


        <div class="col-md-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#activity" data-toggle="tab">Edit</a></li>
                    <li><a href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
                <div class="tab-content">
                    <div class="active tab-pane" id="activity">

                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Parent</th>
                                    <th>Created At</th>
                                    <th>Last Updated</th>
                                </tr>
                                @foreach($categories as $category)

                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->parent ? $category->parent->name : ""}}</td>
                                        <td>{{ Carbon\Carbon::parse($category->created_at)->format('d-m-Y') }}</td>
                                        <td>{{ Carbon\Carbon::parse($category->updated_at)->format('d-m-Y') }}</td>

                                        <td><a class="btn btn-block btn-primary btn-xs" href="{{route('categories.edit', $category->id)}}">Edit</a></td>

                                        <td>
                                            {!! Form::open(['method' => 'DELETE', 'action' => ['AdminCategoriesController@destroy', $category->id]]) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger btn-xs']) !!}
                                            {!! Form::close() !!}
                                        </td>

                                    </tr>

                                @endforeach

                            </table>
                        </div>

                    </div>

                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="settings">

                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>


@stop
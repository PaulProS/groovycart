@extends('layouts.admin')

@section('content')

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit User</h3>
            </div>
            <!-- /.box-header -->

        </div>
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{$user->photo ? $user->photo->photo : "http://placehold.it/400X400"}}" alt="User profile picture">

                        <h3 class="profile-username text-center">{{title_case($user->name)}}</h3>

                        <p class="text-muted text-center">{{$user->role ? title_case($user->role->name) : 'No Role'}}</p>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">About</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>

                        <p class="text-muted">{{title_case($user->address)}}</p>


                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab">Edit</a></li>
                        <li><a href="#settings" data-toggle="tab">Settings</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">

                            {!! Form::model($user, ['method'=>'PATCH', 'action' => ['AdminUserController@update', $user->id], 'files' => true, 'class' => 'form-horizontal']) !!}
                                <div class="form-group">
                                    {!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('email', 'Email', ['class' => 'col-sm-2 control-label']) !!}

                                    <div class="col-sm-10">
                                        {!! Form::email('email', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('address', 'Address', ['class' => 'col-sm-2 control-label']) !!}

                                    <div class="col-sm-10">
                                        {!! Form::textarea('address',null , ['class'=>'form-control', 'rows' => 2]) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('role_id', 'Role', ['class' => 'col-sm-2 control-label']) !!}

                                    <div class="col-sm-3">
                                        {!! Form::select('role_id', $roles , null, ['class'=>'form-control']) !!}
                                    </div>

                                    {!! Form::label('is_active', 'Status', ['class' => 'col-sm-2 control-label']) !!}

                                    <div class="col-sm-3">
                                        {!! Form::select('is_active', [1 => 'Active', 0 => 'Not Active'] , null, ['class'=>'form-control']) !!}
                                    </div>

                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">

                                    {!! Form::file('photo') !!}

                                        <p class="help-block">Choose a profile picture</p>

                                    </div>

                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                                    </div>
                                </div>
                            {!! Form::close() !!}

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
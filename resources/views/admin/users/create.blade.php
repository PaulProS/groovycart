@extends('layouts.admin')

@section('content')
     <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Create New User</h3>
            </div>
            <!-- /.box-header -->

        </div>
        <div class="row">
            <div class="col-md-9">
                {!! Form::open(['action' => 'AdminUserController@store', 'files' => true, 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'Enter Name', 'required']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email', 'required']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Password', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter password', 'required']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('role_id', 'Role', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('is_active', 'Status', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::select('is_active', [1 => 'Active', 0 => 'Not Active'], null, ['class'=>'form-control']) !!}
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
                        {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
@stop
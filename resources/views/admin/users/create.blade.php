@extends('layouts.admin')

@section('content')

    <section class="col-md-3">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add New User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {!! Form::open(['action' => 'AdminUserController@store', 'files' => true]) !!}
                <div class="box-body">
                    <div class="form-group">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'Enter Name']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter password']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::file('photo') !!}
                        <p class="help-block">Choose a profile picture</p>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    {!! Form::submit('Add User', ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}

        </div>
        <!-- /.box -->
    </section>

@stop
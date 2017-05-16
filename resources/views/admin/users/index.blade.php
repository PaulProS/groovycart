@extends('layouts.admin')

@section('content')

    <section>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Users List</h3>

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
                                <th>User</th>
                                <th>Email</th>
                                <th>Created</th>
                                <th>Last Updated</th>
                                <th>Status</th>
                                <th>Address</th>
                            </tr>
                            @foreach($users as $user)

                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{title_case($user->name)}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{ Carbon\Carbon::parse($user->created_at)->format('d-m-Y') }}</td>
                                    <td>{{ Carbon\Carbon::parse($user->updated_at)->format('d-m-Y') }}</td>
                                    <td><span class="{{$user->is_active == 1 ? 'label label-success' : 'label label-warning'}}">{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</span></td>
                                    <td>{{$user->address}}</td>
                                    <td><a class="btn btn-block btn-primary btn-xs" href="{{route('users.edit', $user->id)}}">Edit</a></td>
                                    <td>
                                        {!! Form::open(['method' => 'DELETE', 'action' => ['AdminUserController@destroy', $user->id]]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger btn-xs']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>

                            @endforeach

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
@stop
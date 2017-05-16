@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Welcome {{title_case(Auth::user()->name)}}</h3>
        </div>
    </div>

@stop
@extends('layouts.bestStore.bstore')

@section('content')

    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Register Page</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- register -->
    <div class="register">
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Register Here</h3>
            <p class="est animated wow zoomIn" data-wow-delay=".5s">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
            <div class="login-form-grids">
                <h5 class="animated wow slideInUp" data-wow-delay=".5s">profile information</h5>
                <form class="animated wow slideInUp" data-wow-delay=".5s" role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="register-check-box animated wow slideInUp" data-wow-delay=".5s">
                        <div class="check">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Subscribe to Newsletter</label>
                        </div>
                    </div>
                    <h6 class="animated wow slideInUp" data-wow-delay=".5s">Login information</h6>
                    <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" class="email aitsw3ls" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" name="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" required>
                    <div class="register-check-box">
                        <div class="check">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>I accept the terms and conditions</label>
                        </div>
                    </div>
                    <input type="submit" value="Register">
                </form>
            </div>
            <div class="register-home animated wow slideInUp" data-wow-delay=".5s">
                <a href="/home">Home</a>
            </div>
        </div>
    </div>
    <!-- //register -->

@stop

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Register</div>--}}
                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<h3>SIGN UP</h3>--}}

                        {{--<div class="{{ $errors->has('name') ? ' has-error' : '' }}">--}}

                                {{--<input id="name" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>--}}

                                {{--@if ($errors->has('name'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                        {{--</div>--}}

                        {{--<div class="{{ $errors->has('email') ? ' has-error' : '' }}">--}}

                                {{--<input id="email" class="email aitsw3ls" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                        {{--</div>--}}

                        {{--<div class="{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                             {{--<input id="password" type="password" name="password" placeholder="Password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                        {{--</div>--}}

                             {{--<input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" required>--}}

                        {{--<div class="send-button wthree agileits">--}}
                            {{--<input type="submit" value="SIGN UP">--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

@extends('layouts.bestStore.bstore')

@section('content')

    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Login Page</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->

    <!-- login -->
    <div class="login">
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Login Form</h3>
            <p class="est animated wow zoomIn" data-wow-delay=".5s">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
            <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="email aitsw3ls" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
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
                    <div class="forgot">
                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        Remember me
                    </div>
                    <input type="submit" value="Login">
                </form>
            </div>
            <h4 class="animated wow slideInUp" data-wow-delay=".5s">For New People</h4>
            <p class="animated wow slideInUp" data-wow-delay=".5s"><a href="register.html">Register Here</a> (Or) go back to <a href="index.html">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
        </div>
    </div>
    <!-- //login -->

@stop


{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Login</div>--}}
                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<div class="{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<input id="email" type="email" class="email aitsw3ls" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>--}}
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
                        {{--<ul class="tick w3layouts agileinfo">--}}
                            {{--<li>--}}
                                {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>--}}
                                {{--<label for="brand1"><span></span>Remember me</label>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="{{ route('password.request') }}">Forgot Password?</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--<div class="send-button wthree agileits">--}}
                            {{--<input type="submit" value="LOGIN">--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

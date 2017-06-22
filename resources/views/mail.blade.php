@extends('layouts.bestStore.bstore')

@section('content')

    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="/home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Mail Us</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- mail -->
    <div class="mail animated wow zoomIn" data-wow-delay=".5s">
        <div class="container">
            <h3>Mail Us</h3>
            <p class="est">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
            <div class="mail-grids">
                <div class="col-md-8 mail-grid-left animated wow slideInLeft" data-wow-delay=".5s">
                    {!! Form::open(['url' => 'sendEmail', 'method' => 'POST']) !!}
                    {!! Form::text('name', null, ['placeholder' => 'Name', 'required']) !!}
                    {!! Form::email('email', null, ['placeholder' => 'Email', 'required']) !!}
                    {!! Form::text('subject', null, ['placeholder' => 'Subject', 'required']) !!}
                    {!! Form::textarea('message', null, ['placeholder' => 'Message...', 'required']) !!}
                    {!! Form::submit('Send') !!}
                    {!! Form::close() !!}
                </div>
                <div class="col-md-4 mail-grid-right animated wow slideInRight" data-wow-delay=".5s">
                    <div class="mail-grid-right1">
                        <img src="{{asset("/images/3.png")}}" alt=" " class="img-responsive" />
                        <h4>Rita Williumson <span>Manager</span></h4>
                        <ul class="phone-mail">
                            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone: +1234 567 893</li>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email: <a href="mailto:info@example.com">info@example.com</a></li>
                        </ul>
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/" target="_blank" class="facebook"></a></li>
                            <li><a href="https://twitter.com/" target="_blank" class="twitter"></a></li>
                            <li><a href="https://plus.google.com/" target="_blank" class="g"></a></li>
                            <li><a href="https://www.instagram.com/" target="_blank" class="instagram"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <iframe class="animated wow slideInLeft" data-wow-delay=".5s" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3098.7638135888296!2d-77.47669308468912!3d39.04350424592369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b63eb3bc8da92b%3A0x78c8e09ab1cabc90!2sShopping+Plaza%2C+Ashburn%2C+VA+20147%2C+USA!5e0!3m2!1sen!2sin!4v1457602090579" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <!-- //mail -->

@stop
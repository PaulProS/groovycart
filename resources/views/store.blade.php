@extends('layouts.bestStore.bstore')

@section('content')

    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1">
                <li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Products</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->

    @include('partials.products')

    <script type="text/javascript">

        $(function() {
            $('body').on('click', '.pagination a', function(e) {
                e.preventDefault();

                var url = $(this).attr('href');
                getProducts(url);
                window.history.pushState("", "", url);
            });

            function getProducts(url) {
                $.ajax({
                    url : url
                }).done(function (data) {
                    $('.products').html(data);
                }).fail(function () {
                    alert('Products could not be loaded.');
                });
            }
        });

    </script>
@stop
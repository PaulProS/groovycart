<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->
<head>

    <title>Groovy Apparel a E-Commerce & Fashion Category Bootstrap Responsive Website Template | Home :: W3layouts</title>

    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Groovy Apparel a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //Meta-Tags -->

    <!-- Custom-StyleSheet-Links -->
    <!-- Bootstrap-CSS -->	   <link rel="stylesheet" href="css/bootstrap.css"					type="text/css" media="all">
    <!-- Index-Page-CSS -->	   <link rel="stylesheet" href="css/style.css"						type="text/css" media="all">
    <!-- Header-Slider-CSS --> <link rel="stylesheet" href="css/fluid_dg.css" id="fluid_dg-css" type="text/css" media="all">
    <!-- //Custom-StyleSheet-Links -->

    <!-- Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Serif:400,700"	   type="text/css" media="all">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700"	   type="text/css" media="all">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500" type="text/css" media="all">
    <!-- //Fonts -->

    <!-- Font-Awesome-File-Links -->
    <!-- CSS --> <link rel="stylesheet" href="css/font-awesome.css" 		 type="text/css" media="all">
    <!-- TTF --> <link rel="stylesheet" href="fonts/fontawesome-webfont.ttf" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->

    <!-- Supportive-Modernizr-JavaScript --><script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Default-JavaScript --><script src="js/jquery-2.2.3.js"></script>

</head>
<!-- //Head -->



<!-- Body -->
<body>



@include('layouts.header')



@yield('content')



@include('layouts.footer')

<!-- Copyright -->
<div class="w3lscopyrightaits">
    <div class="col-md-8 w3lscopyrightaitsgrid w3lscopyrightaitsgrid1">
        <p>© 2017 Groovy Apparel. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="=_blank"> W3layouts </a></p>
    </div>
    <div class="col-md-4 w3lscopyrightaitsgrid w3lscopyrightaitsgrid2">
        <div class="agilesocialwthree">
            <ul class="social-icons">
                <li><a href="#" class="facebook w3ls" title="Go to Our Facebook Page"><i class="fa w3ls fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="#" class="twitter w3l" title="Go to Our Twitter Account"><i class="fa w3l fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="#" class="googleplus w3" title="Go to Our Google Plus Account"><i class="fa w3 fa-google-plus-square" aria-hidden="true"></i></a></li>
                <li><a href="#" class="instagram wthree" title="Go to Our Instagram Account"><i class="fa wthree fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#" class="youtube w3layouts" title="Go to Our Youtube Channel"><i class="fa w3layouts fa-youtube-square" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //Copyright -->



<!-- Custom-JavaScript-File-Links -->

<!-- Default-JavaScript --><script src="js/jquery-2.2.3.js"></script>
<script src="js/modernizr.custom.js"></script>
<!-- Custom-JavaScript-File-Links -->

<!-- cart-js -->
<script src="js/minicart.js"></script>
<script>
    w3l.render();

    w3l.cart.on('w3agile_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {
            }
        }
    });
</script>
<!-- //cart-js -->
<!-- Shopping-Cart-JavaScript -->

<!-- Header-Slider-JavaScript-Files -->
<script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='js/fluid_dg.min.js'></script>
<script>jQuery(document).ready(function(){
        jQuery(function(){
            jQuery('#fluid_dg_wrap_4').fluid_dg({
                height: 'auto',
                loader: 'bar',
                pagination: false,
                thumbnails: true,
                hover: false,
                opacityOnGrid: false,
                imagePath: '',
                time: 4000,
                transPeriod: 2000,
            });
        });
    })
</script>
<!-- //Header-Slider-JavaScript-Files -->

<!-- Dropdown-Menu-JavaScript -->
<script>
    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //Dropdown-Menu-JavaScript -->

<!-- Pricing-Popup-Box-JavaScript -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });
    });
</script>
<!-- //Pricing-Popup-Box-JavaScript -->

<!-- Model-Slider-JavaScript-Files -->
<script src="js/jquery.film_roll.js"></script>
<script>
    (function() {
        jQuery(function() {
            this.film_rolls || (this.film_rolls = []);
            this.film_rolls['film_roll_1'] = new FilmRoll({
                container: '#film_roll_1',
                height: 560
            });
            return true;
        });
    }).call(this);
</script>
<!-- //Model-Slider-JavaScript-Files -->

<!-- //Custom-JavaScript-File-Links -->



<!-- Bootstrap-JavaScript --> <script src="js/bootstrap.js"></script>

</body>
<!-- //Body -->



</html>
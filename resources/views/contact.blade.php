@extends('layouts.groovy')

@section('content')


    <!-- Contact -->
    <div class="w3aitscontactagile">
        <h1>CONTACT</h1>

        <div class="contact-info">
            <div class="container">
                <div class="contact-info-grids">
                    <div class="col-md-6 col-sm-6 contact-info-grid contact-info-grid-1">
                        <img src="images/shop.jpg" alt="Groovy Apparel">
                    </div>
                    <div class="col-md-6 col-sm-6 contact-info-grid contact-info-grid-2">
                        <h2>Where We Are</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>



    <!-- Map -->
    <div id="map"></div>
    <!-- //Map -->



    <div class="wthreeaddressaits">
        <div class="container">
            <div class="col-md-4 wthreeaddressaits-grid wthreeaddressaits-grid1">
                <div class="aitsaddressw3l">
                    <h4>Address</h4>
                    <address>
                        <ul>
                            <li>Studio 40019</li>
                            <li>Parma Via Modena</li>
                            <li>Sant'Agata Bolognese</li>
                            <li>BO, Italy</li>
                        </ul>
                    </address>
                </div>
                <div class="aitsphonew3l">
                    <h4>Phone</h4>
                    <ul>
                        <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +1 (734) 123-4567</li>
                        <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +1 (739) 648-7114</li>
                    </ul>
                </div>
                <div class="aitsemailw3l">
                    <h4>Email</h4>
                    <ul>
                        <li><a href="mailto:mail@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> info1@example.com</a></li>
                        <li><a href="mailto:mail@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> info2@example.com</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="col-md-8 wthreeaddressaits-grid wthreeaddressaits-grid2">
                <form action="#" method="post">
                    <input type="text" class="text" name="Name" placeholder="Name" required="">
                    <input type="text" class="text" name="Email" placeholder="Email" required="">
                    <input type="text" class="text" name="Phone" placeholder="Phone" required="">
                    <input type="text" class="text" name="City" placeholder="City" required="">
                    <textarea name="Message" class="text" placeholder="Message" required=""></textarea>
                    <input type="submit" value="SEND MESSAGE">
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //Contact -->

    @include('newsletter')
@stop
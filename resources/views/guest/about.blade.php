@extends('layouts.master')

@section('content')
    <!-- Titlebar
    ================================================== -->
    <div class="parallax titlebar" data-background="images/place.jpg" data-color="#333333" data-color-opacity="0.7"
        data-img-width="800" data-img-height="505">

        <div id="titlebar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h2>About Us</h2>


                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>About Us</li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Content
    ================================================== -->
    <!-- Container / Start -->
    <div class="container">

        <div class="row">

            <!-- Contact Details -->
            <div class="col-md-12">

                <h3 class="headline margin-bottom-30">Welcome to Prifa</h3>

                <!-- Contact Details -->
                <div class="sidebar-textbox">
                    <p>We are not estate agents aone, but we aim to be the place for property seekers to find details of all
                        properties available to buy or rent.

                    <p>We have created a significantly more convenient and effective way for property hunters to find their
                        next property: up-to-date property information, available for free, accessible 24 hours a day to
                        anyone with internet access and far more complete in terms of number of properties and depth of
                        detail on each property than through other traditional advertising media.</p>

                </div>

            </div>

            <!-- Contact Form -->
            <div class="col-md-12">

                <section id="contact">
                    <h3 class="headline margin-bottom-35">Are you a Lanlord or an Estate Agent? List your property for FREE.
                    </h3>

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="send-btn">
                            <a href="login-register.php"><button type="button" class="submit button">Register
                                    Now</button></a>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Contact Form / End -->

        </div>

    </div>
    <!-- Container / End -->
    <br><br>
@endsection

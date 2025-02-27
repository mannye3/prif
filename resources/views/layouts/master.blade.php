<!DOCTYPE html>



<head>

    <!-- Basic Page Needs
================================================== -->
    <title>Real Estate and Property in Nigeria for Rent - Prifa.com.ng</title>
    <meta name="description"
        content="Prifa.com.ng is Nigerian real estate and property listing website with property and houses in Nigeria for rent and for sale. We are the online real estate destination for property sales and rentals in Nigeria with properties including homes, houses, land, shops, offices and other commercial properties to buy or rent." />
    <meta property="og:type" content="website" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
================================================== -->
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/color.css') }}">

</head>

<body>

    <!-- Wrapper -->
    <div id="wrapper">






        <!-- Header Container
================================================== -->
        <header id="header-container">

            <!-- Topbar -->
            <div id="top-bar">
                <div class="container">

                    <!-- Left Side Content -->
                    <div class="left-side">

                        <!-- Top bar -->
                        <ul class="top-bar-menu">
                            <li><i class="fa fa-phone"></i> +2349073627352</li>
                            <li><i class="fa fa-envelope"></i> <a href="#">info@prifa.com.ng</a></li>

                        </ul>

                    </div>
                    <!-- Left Side Content / End -->


                    <!-- Left Side Content -->
                    <div class="right-side">

                        <!-- Social Icons -->
                        <ul class="social-icons">
                            <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                            <li><a class="instagram" href="https://www.instagram.com/prifa_ng"><i
                                        class="icon-instagram"></i></a></li>
                            {{-- <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                            <li><a class="pinterest" href="#"><i class="icon-pinterest"></i></a></li> --}}
                        </ul>

                    </div>
                    <!-- Left Side Content / End -->

                </div>
            </div>
            <div class="clearfix"></div>
            <!-- Topbar / End -->


            <!-- Header -->
            <div id="header">
                <div class="container">

                    <!-- Left Side Content -->
                    <div class="left-side">

                        <!-- Logo -->
                        <div id="logo">
                            <a href="{{ route('welcome') }}"><img
                                    src="https://raw.githubusercontent.com/mannye3/findeo/master/images/logo.png"
                                    alt=""></a>
                        </div>


                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>


                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1">
                            <ul id="responsive">

                                <li><a href="{{ route('welcome') }}">Home</a>

                                </li>

                                <li><a href="{{ route('about') }}">About</a>

                                </li>

                                <li><a href="{{ route('rent') }}">For Rent</a>

                                </li>

                                <li><a href="{{ route('sale') }}">For Sale</a>

                                </li>






                            </ul>
                        </nav>
                        <div class="clearfix"></div>
                        <!-- Main Navigation / End -->

                    </div>
                    <!-- Left Side Content / End -->

                    <!-- Right Side Content / End -->
                    <div class="right-side">
                        <!-- Header Widget -->
                        <div class="header-widget">
                            <a href="{{ route('login') }}" class="sign-in"><i class="fa fa-user"></i> Log In /
                                Register</a>
                            <a href="submit-property.html" class="button border">Submit Property</a>
                        </div>
                        <!-- Header Widget / End -->
                    </div>
                    <!-- Right Side Content / End -->

                </div>
            </div>
            <!-- Header / End -->

        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->


        @yield('content')


        <!-- Footer
================================================== -->



        <!-- Footer
================================================== -->
        <div id="footer" class="sticky-footer">
            <!-- Main -->
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <img class="footer-logo" src="images/logo.png" alt="">
                        <br><br>
                        <p>We are not estate agents alone, but we aim to be the place for property seekers to find
                            details of all properties available to buy or rent.</p>
                    </div>

                    <div class="col-md-4 col-sm-6 ">
                        <h4>Helpful Links</h4>
                        <ul class="footer-links">
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Privacy Policy</a></li>

                        </ul>

                        <!--  <ul class="footer-links">
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Our Agents</a></li>
          <li><a href="#">How It Works</a></li>
          <li><a href="#">Contact</a></li>
        </ul> -->
                        <div class="clearfix"></div>
                    </div>

                    <div class="col-md-3  col-sm-12">
                        <h4>Contact Us</h4>
                        <div class="text-widget">
                            <span>Lagos, Nigeria</span> <br>
                            Phone: <span>+2349073627352 </span><br>
                            E-Mail:<span> <a href="#"><span class="__cf_email__">info@prifa.com.ng</span></a>
                            </span><br>
                        </div>

                        <ul class="social-icons margin-top-20">
                            <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                            <li><a class="instagram" href="https://www.instagram.com/prifa_ng"><i
                                        class="icon-instagram"></i></a></li>
                        </ul>

                    </div>

                </div>

                <!-- Copyright -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyrights">
                            <p class="copy">© <?php echo date('Y'); ?> Design by <a href="http://e3tech.com.ng/"
                                    target="_blank">E3 Technologies</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- Footer / End -->


        <!-- Back To Top Button -->
        <div id="backtotop"><a href="#"></a></div>


        <!-- Scripts
================================================== -->

        <!-- GOOGLE PLACES AND AUTOCOMPLETE  -->
        <script>
            var placeSearch, autocomplete;
            var componentForm = {
                street_number: 'short_name',
                route: 'long_name',
                locality: 'long_name',
                administrative_area_level_1: 'short_name',
                country: 'long_name',
                postal_code: 'short_name'
            };

            function initAutocomplete() {
                // Create the autocomplete object, restricting the search to geographical
                // location types.
                autocomplete = new google.maps.places.Autocomplete(
                    /** @type {!HTMLInputElement} */
                    (document.getElementById('autocomplete')), {
                        types: ['geocode']
                    });

                // When the user selects an address from the dropdown, populate the address
                // fields in the form.
                autocomplete.addListener('place_changed', fillInAddress);
            }

            function fillInAddress() {
                // Get the place details from the autocomplete object.
                var place = autocomplete.getPlace();

                for (var component in componentForm) {
                    document.getElementById(component).value = '';
                    document.getElementById(component).disabled = false;
                }

                // Get each component of the address from the place details
                // and fill the corresponding field on the form.
                for (var i = 0; i < place.address_components.length; i++) {
                    var addressType = place.address_components[i].types[0];
                    if (componentForm[addressType]) {
                        var val = place.address_components[i][componentForm[addressType]];
                        document.getElementById(addressType).value = val;
                    }
                }
            }

            // Bias the autocomplete object to the user's geographical location,
            // as supplied by the browser's 'navigator.geolocation' object.
            function geolocate() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var geolocation = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                        var circle = new google.maps.Circle({
                            center: geolocation,
                            radius: position.coords.accuracy
                        });
                        autocomplete.setBounds(circle.getBounds());
                    });
                }
            }
        </script>
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxkyVw9JMI0N6HBsjIKelYK337j81RNec&libraries=places&callback=initAutocomplete"
            async defer></script>
        <!-- Scripts
================================================== -->
        <script type="text/javascript" src="{{ asset('user/scripts/jquery-3.4.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('user/scripts/jquery-migrate-3.1.0.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('user/scripts/chosen.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('user/scripts/magnific-popup.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('user/scripts/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('user/scripts/rangeSlider.js') }}"></script>
        <script type="text/javascript" src="{{ asset('user/scripts/sticky-kit.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('user/scripts/slick.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('user/scripts/masonry.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('user/scripts/mmenu.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('user/scripts/tooltips.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('user/scripts/custom.js') }}"></script>

        

        <!-- Google Autocomplete -->
        <script>
            function initAutocomplete() {
                var input = document.getElementById('autocomplete-input');
                var autocomplete = new google.maps.places.Autocomplete(input);

                autocomplete.addListener('place_changed', function() {
                    var place = autocomplete.getPlace();
                    if (!place.geometry) {
                        window.alert("No details available for input: '" + place.name + "'");
                        return;
                    }
                });
            }
        </script>
        {{-- 
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxkyVw9JMI0N6HBsjIKelYK337j81RNec&libraries=places">
        </script> --}}


        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxkyVw9JMI0N6HBsjIKelYK337j81RNec&libraries=places&callback=initAutocomplete"
            async defer></script>




    </div>
    <!-- Wrapper / End -->


</body>

<!-- Mirrored from www.vasterad.com/themes/findeo_updated/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Apr 2024 16:03:06 GMT -->

</html>

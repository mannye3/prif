@extends('layouts.master')

@section('content')
    <!-- Map Container -->
    <div class="contact-map margin-bottom-55">

        <!-- Google Maps -->
        <div class="google-map-container">
            <div id="propertyMap" data-latitude="6.45407" data-longitude="3.39467"></div>
            <a href="#" id="streetView">Street View</a>
        </div>
        <!-- Google Maps / End -->

        <!-- Office -->
        <div class="address-box-container">
            <div class="address-container" data-background-image="images/our-office.jpg">
                <div class="office-address">
                    <h3>Our Office</h3>
                    <ul>
                        <li>Lagos Nigeria</li>
                        <!-- <li>New York, NY 10016</li> -->
                        <li>Phone +2349073627352 </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Office / End -->

    </div>
    <div class="clearfix"></div>
    <!-- Map Container / End -->


    <!-- Container / Start -->
    <div class="container">

        <div class="row">

            <!-- Contact Details -->
            <div class="col-md-4">

                <h4 class="headline margin-bottom-30">Find Us There</h4>

                <!-- Contact Details -->
                <div class="sidebar-textbox">


                    <ul class="contact-details">
                        <li><i class="im im-icon-Phone-2"></i> <strong>Phone:</strong> <span>+2349073627352 </span></li>


                        <li><i class="im im-icon-Envelope"></i> <strong>E-Mail:</strong> <span><a href="#"><span
                                        class="__cf_email__"
                                        data-cfemail="9cf3fafaf5fff9dcf9e4fdf1ecf0f9b2fff3f1">info@prifa.com.ng</span></a></span>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Contact Form -->
            <div class="col-md-8">

                <section id="contact">

                    <h4 class="headline margin-bottom-35">Contact Form</h4>

                    <div id="contact-message"></div>

                    <form method="post" action="" autocomplete="on">

                        <div>
                            <input name="name" type="text" placeholder="Full Name" required="required" />
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <input name="phone" type="number" placeholder="Phone number" required="required" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div>
                                    <input name="email" type="email" placeholder="Email Address"
                                        pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$"
                                        required="required" />
                                </div>
                            </div>
                        </div>



                        <div>
                            <textarea name="message" cols="40" rows="3" placeholder="Message" spellcheck="true" required="required"></textarea>
                        </div>

                        <input type="submit" name="contact" class="submit button" value="Submit Message" />

                    </form>
                </section>
            </div>
            <!-- Contact Form / End -->

        </div>

    </div>
    <!-- Container / End -->
@endsection

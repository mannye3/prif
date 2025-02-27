@extends('layouts.app')

@section('content')
     <section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-4">
            <h2 class="title pt-md-5 pt-4">Contact Us</h2>
            <p class="inner-page-para mt-2">At Boomanage Properties, our commitment is to deliver top-notch services tailored to meet your distinct requirements.</p>
        </div>
        <div class="hero-overlay"></div>
    </div>
</section>
<!-- //Contact breadcrumb -->

<section class="w3l-contact-main py-5" id="contact">
    <div class="container pt-lg-5 pt-md-3">
        {{-- <div class="title-content text-center mb-md-5 mb-4 wow fadeInUp" data-wow-delay=".2s">
            <h3 class="title-big mx-lg-5">We have made it easy for clients to reach us and get their solutions weaved</h3>
            <p class="text-para mt-2"><b>LEADROITT REALTY LIMITED</b> is a cutting edge real estate company with experience and expertise in designing, developing and managing quality homes and properties. We know the problems. We provide the solutions!</p>
        </div> --}}
        <div class="w3l-contact-info">
            <div class="row contact-infos">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-contact-infos">
                        <div class="icon-box"> <span class="fa fa-map-marker" style="color:#213364;"></span></div>
                        <div class="text-box">
                            <h3 class="mb-2">Our Location</h3>
                            <p>The Workstation, Maryland Shopping Mall,
                                    Maryland, Lagos.</p>
                        </div>
                    </div>
                  </div>
                  


                <div class="col-lg-4 col-md-6 mt-md-0 mt-4 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-contact-infos">
                        <div class="icon-box"> <span class="fa fa-mobile" style="color:#213364;"></span></div>
                        <div class="text-box">
                            <h3 class="mb-2">Give us a call</h3>
                            <p><a href="tel:+2348139096910">+2348139096910</a></p>
                            <p><a href="tel:+2348123173582">+2348123173582</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-contact-infos">
                        <div class="icon-box"> <span class="fa fa-envelope-o" style="color:#213364;"></span></div>
                        <div class="text-box">
                            <h3 class="mb-2">Help Desk</h3>
                            <p> <a href="mailto:info@boomanageproperties.com">info@boomanageproperties.com</a></p>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- contact map -->
<section class="w3l-contact-main" id="contact">
    <div class="container">
        <div class="map pt-lg-3">
            <iframe width="600" height="500" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.637847909235!2d3.365675514770971!3d6.5673108952502774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b93913565ed73%3A0x26e2a44b039ab00e!2sWorkstation!5e0!3m2!1sen!2sng!4v1593282266693!5m2!1sen!2sng" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>
</section>
<!-- //contact map -->
<!-- contact-form -->
<section class="w3l-contact-main">
  <div class="contact-infhny py-5">
    <div class="container py-lg-3">
      <div class="top-map">
        <div class="map-content-9">
          <form action="{{route('contactpost')}}" method="post">
            @csrf
            <div class="form-top1 wow fadeInUp" data-wow-delay=".2s">
              <h3 class="title-big text-center mb-2">Talk to Us</h3>
               @if (\Session::has('success'))
                           
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <strong>{{ \Session::get('success') }}</strong>
                                </div>
                                
                            
                        @endif

                        @if (count($errors) > 0)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
             
              <div class="form-top">
                <div class="form-top-left">
                  <input type="text" name="name" id="w3lName" placeholder="Name" required="">
                  <input type="number" name="phone" placeholder="Your phone number" required="">
                  <input type="email" name="email" id="w3lSender" placeholder="Email*" required="">
                  <input type="text" name="subject" id="w3lName" placeholder="Subject" required="">
                </div>
                <div class="form-top-righ">
                  <textarea name="message" id="w3lMessage" placeholder="Message*" required=""></textarea>
                </div>
               
              </div>
              <div class="text-lg-left">
                <button  type="submit" class="btn btn-style btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //contact-form -->

@endsection
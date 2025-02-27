@extends('layouts.app')

@section('content')
  <!--/header-->
<!-- hero slider Start -->
<div class="banner-wrap">
    <div class="banner-slider">
        <!-- hero slide start -->
        <div class="banner-slide bg1">
            <div class="container">
                <div class="hero-content">
                    <h1 data-animation="fadeInDown" data-delay="0.8s" data-color="#fff">
                        Are you interested in purchasing, developing, or selling a real estate property?</h1>
                    <p data-animation="fadeInDown" class="mt-4"> Whether you're looking to invest, build, or make a profitable sale, we've got you covered</p>
                    <div class="cta-btn" data-animation="fadeInDown" data-delay="1s">
                        <a href="{{route('contact')}}" class="btn btn-style btn-primary">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="hero-overlay"></div>
        </div>
        <!-- hero slide end -->
        <!-- hero slide start -->
        <div class="banner-slide bg2">
            <div class="container">
                <div class="hero-content">
                    <h1 data-animation="fadeInDown" data-delay="0.8s" data-color="#fff">
                        Exploring opportunities in real estate?
                    </h1>
                    <p data-animation="fadeInDown" class="mt-4">Whether you want to buy, develop, or sell a property, we're here to assist you every step of the way.</p>
                    <div class="cta-btn" data-animation="fadeInDown" data-delay="1s">
                     <a href="{{route('contact')}}" class="btn btn-style btn-primary">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="hero-overlay"></div>
        </div>
        <!-- hero slide end -->
        <!-- hero slide start -->
        <div class="banner-slide bg3">
            <div class="container">
                <div class="hero-content">
                    <h1 data-animation="fadeInDown" data-color="#fff" data-delay="0.8s">
                        Interested in real estate dealings, whether it's acquisition, development, or sale?
                    </h1>
                    <p data-animation="fadeInDown" class="mt-4">Our expertise and services can guide you through the entire process to make your real estate goals a reality.</p>
                    <div class="cta-btn" data-animation="fadeInDown" data-delay="1s">
                         <a href="{{route('contact')}}" class="btn btn-style btn-primary">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="hero-overlay"></div>
        </div>
    </div>

</div>
<!-- hero slider end -->
 <!-- home page about section -->
<section class="w3l-homeblock1" id="about">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                    {{-- <span class="title-small wow fadeInDown" data-wow-delay=".4s">Boomanage Properties</span> --}}
                    <h3 class="title-big wow fadeInDown" data-wow-delay=".6s">Boomanage Properties</h3>
                    <p style="" class="mt-md-4 mt-3 fadeInDown" data-wow-delay=".6s">We are a distinguished indigenous Real Estate and Business Development firm renowned for our proficiency in Real Estate Development, Dynamic Marketing & Brokerage,Business Initiation & Development Advisory, Real Estate Training, Management, Investment,Mortgage Advisory,and Consultancy services.</p>

                     <p style="" class="mt-md-4 mt-3 fadeInDown" data-wow-delay=".6s">Our dedicated team of professionals is committed to delivering expert advisory services, strategically designed to create enduring and substantial value for our esteemed clientele.</p>


                    
                    {{-- <ul class="service-list pt-lg-2 mt-4 fadeInDown" data-wow-delay=".6s">
                        <li class="service-link"><a href="#url"><span class="fa fa-check-circle"></span> We DESIGN</a></li>
                        <li class="service-link"><a href="#url"><span class="fa fa-check-circle"></span> BUILD</a></li>
                        <li class="service-link"><a href="#url"><span class="fa fa-check-circle"></span> and MANAGE</a></li>
                    </ul> --}}
                </div>
                <div class="HomeAboutImages col-lg-6 mt-lg-0 mt-md-5 mt-4 wow fadeInDown" data-wow-delay=".6s">
                    <!-- contact map -->
                    <section class="w3l-contact-main" style="background: none;">
                        <div class="container">
                            <div class="mapo pt-lg-6">
                               <img src="https://image.freepik.com/free-photo/people-shaking-hands-toy-model-house_23-2148301743.jpg" alt="property" class="img-fluid">
                            </div>
                        </div>
                        <!--
                        <a href="#learnmore" class="btn btn-style1 mt-3">Learn More</a>
                        -->
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //home page about section -->

 <!-- features section -->
 <section class="w3l-features py-5" id="work">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row main-cont-wthree-2 align-items-center">
            <div class="col-lg-6 feature-grid-left pr-lg-5 wow fadeInDown" data-wow-delay=".2s">
                {{-- <h5 class="title-small wow fadeInDown" data-wow-delay=".4s">Boomanage Properties</h5> --}}
                <h3 class="title-big mb-4 wow fadeInDown" data-wow-delay=".4s">What We Do</h3>
                <p style="" class="text-para wow fadeInDown" data-wow-delay=".6s">At Boomanage Properties, our commitment is to deliver top-notch services tailored to meet your distinct requirements. Our dedicated team is ready to assist you round the clock, 365 days a year, ensuring that your needs are met with excellence and care. We pride ourselves on our unwavering dedication to customer satisfaction, and we're here to serve you anytime, day or night
                </p>
                <a href="{{route('services')}}" class="btn btn-style btn-primary mt-lg-5 mt-4 wow fadeInDown" data-wow-delay=".6s">View More</a>
            </div>
            <div class="col-lg-6 feature-grid-right mt-lg-0 mt-md-5 mt-4">
                <div class="call-grids-w3 d-grid">
                  <div class="grids-1 box-wrap wow fadeInDown" data-wow-delay=".4s">
                        <div class="icon">
                            <i class="fa fa-line-chart" aria-hidden="true" style="font-size:50px; color:#213364;"></i>
                        </div>
                        <h4><a href="#" class="title-head">Business Development Advisory</a></h4>
                    </div>
                      <div class="grids-1 box-wrap wow fadeInDown" data-wow-delay=".4s">
                        <div class="icon">
                            <i class="fa fa-cog" aria-hidden="true" style="font-size:50px; color:#213364;"></i>
                        </div>
                        <h4><a href="#" class="title-head">Property Development & Construction</a></h4>
                    </div>
                    <div class="grids-1 box-wrap wow fadeInDown" data-wow-delay=".2s">
                        <div class="icon">
                            <i class="fa fa-handshake-o" aria-hidden="true" style="font-size:50px; color:#213364;"></i>
                        </div>
                        <h4><a href="#" class="title-head">Deal Negotiation</a></h4>
                    </div>
                  
                    <div class="grids-1 box-wrap wow fadeInDown" data-wow-delay=".2s">
                        <div class="icon">
                            <i class="fa fa-home" aria-hidden="true" style="font-size:50px; color:#213364;"></i>
                        </div>
                        <h4><a href="#" class="title-head">Property Managemnet</a></h4>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features section -->

<!--  //services section -->
<section class="w3l-gallery py-5" id="gallery">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="title-content text-center mb-5 wow fadeInDown" data-wow-delay=".2s">
            
            <h3 class="title-big mx-lg-5">Our Recent Projects</h3>
        </div>
        <div class="row">
              @foreach ($data as $key => $property)
            <div class="col-lg-4 col-md-6 item wow fadeInUp" data-wow-delay=".2s">
                <a href="{{route('project', $property->slug)}}"  class="zoom d-block">
                    <img class="card-img-bottom d-block" style="height: 270px; width: 360px" src="{{ asset('/properties/' . $property->property_picture) }}"
                        alt="Card image cap">
                    <span class="overlay__hover"></span>
                    <span class="hover-content">
                        <span class="title">{{ $property->name }}</span>
                        <span class="content">{{ $property->propert_location }}</span>
                    </span>
                </a>
                 &nbsp;
            </div>
           
            @endforeach
           
        <div class="text-center w-100 mt-md-5 mt-4">
                <a href="{{route('projects')}}" class="load btn btn-style btn-outline-primary"> View All Projects </a>
            </div> 
        </div>
      
    </div>
</section>


<!-- home page progress section gallery6.jpg-->
{{-- <section class="w3l-progress" id="progress">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInDown" data-wow-delay=".2s">
                    <img src="{{ asset('assets/images/career2.jpg')}}" alt="" class="radius-image img-fluid">
                </div>
                <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4">
                    <span class="title-small wow fadeInDown" data-wow-delay=".2s">Boomanage Properties.</span>
                    <h3 class="title-big mb-4 pb-lg-2 wow fadeInDown" data-wow-delay=".2s">Why Choose Us for Your Real Estate?</h3>
                    <div class="progress-info info1 wow fadeInDown" data-wow-delay=".2s">
                        <h6 class="progress-tittle">Professional Team <span class="">98%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-1" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info2 wow fadeInDown" data-wow-delay=".4s">
                        <h6 class="progress-tittle">Superior Quality <span class="">95%</span>
                        </h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-2" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info2 wow fadeInDown" data-wow-delay=".6s">
                        <h6 class="progress-tittle">Integrity <span class="">96%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-3" role="progressbar" style="width: 93%" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info4 mb-0 wow fadeInDown" data-wow-delay=".8s">
                        <h6 class="progress-tittle">Communication <span class="">99%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-4" role="progressbar" style="width: 99%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div
                    <br><br>
                </div>
            </div>
           
        </div>
    </div>
</section> --}}

@endsection
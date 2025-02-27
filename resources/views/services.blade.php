@extends('layouts.app')

@section('content')
   <section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-4">
            <h2 class="title pt-md-5 pt-4">Services</h2>
            <p class="inner-page-para mt-2">At Boomanage Properties, our commitment is to deliver top-notch services tailored to meet your distinct requirements.</p>
        </div>
        <div class="hero-overlay"></div>
    </div>
</section>
<!-- //Service breadcrumb -->
 
<!-- features section -->
 <section class="w3l-features py-5" id="work">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="title-content text-center mb-md-5 mb-4 wow fadeInUp" data-wow-delay=".2s">
            <h3 class="title-small">Boomanage Properties.</h3>
            <h3 class="title-big mx-lg-5">To consistently deliver a delightful and hassle-free buying and selling experience.</h3>
        </div>
        <div class="row main-cont-wthree-2 align-items-center">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="grids-1 box-wrap">
                    <div class="icon">
                       <i class="fa fa-cog" aria-hidden="true" style="font-size:50px; color:#213364;"></i>
                    </div>
                    <h4><a href="#service" class="title-head mb-3">Property Development & Construction</a></h4>
                    <p class="text-para">Explore Our Comprehensive Property Development & Construction Services
                Elevate your real estate aspirations with our expertise in Property Development & Construction. From concept to completion, we bring your projects to life, ensuring top-quality results that define excellence in the industry. </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-md-0 mt-4 wow fadeInUp" data-wow-delay=".4s">
                <div class="grids-1 box-wrap">
                    <div class="icon">
                        <i class="fa fa-home" aria-hidden="true" style="font-size:50px; color:#213364;"></i>
                    </div>
                    <h4><a href="#service" class="title-head mb-3">Property Managemnet</a></h4>
                    <p class="text-para">Effortless Property Management Solutions
                Experience worry-free property ownership with our comprehensive Property Management services. We handle every aspect of your property, ensuring its smooth operation and maximizing its potential.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-lg-0 mt-4 wow fadeInUp" data-wow-delay=".6s">
                <div class="grids-1 box-wrap">
                    <div class="icon">
                         <i class="fa fa-line-chart" aria-hidden="true" style="font-size:50px; color:#213364;"></i>
                    </div>
                    <h4><a href="#service" class="title-head mb-3">Real Estate Advisory</a></h4>
                    <p class="text-para">Elevate Your Business with Expert Advisory
                Unlock growth opportunities and strategic insights with our Business Development Advisory services. We provide tailored guidance to help you expand, innovate, and thrive in the real estate industry. </p>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 mt-lg-0 mt-4 wow fadeInUp" data-wow-delay=".6s">
                <div class="grids-1 box-wrap">
                    <div class="icon">
                         <i class="fa fa-handshake-o" aria-hidden="true" style="font-size:50px; color:#213364;"></i>
                    </div>
                    <h4><a href="#service" class="title-head mb-3">Real Estate Advisory</a></h4>
                    <p class="text-para">Strategic Deal Negotiation
                    Our experts excel in strategic deal negotiation, ensuring favorable outcomes for your real estate transactions. We skillfully navigate negotiations to secure the best terms and agreements for you. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features section -->


<section class="w3l-project-contact py-5">
    <div class="container py-md-5 py-sm-4 py-2">
        <div class="row">
            <div class="col-lg-8 wow fadeInUp" data-wow-delay=".2s">
                <div class="bottom-info">
                    <div class="header-section">
                        <h3 class="title-big">Crafting with meticulous attention to your every DETAIL, always putting your best interests first.</h3>
                        <p class="mt-3 pr-lg-5">We recognize that client satisfaction is the cornerstone of our success, which fuels our determination to not only meet but surpass our clients' expectations.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 align-self text-lg-right wow fadeInUp" data-wow-delay=".2s">
                <a href="{{route('contact')}}" class="btn btn-style btn-primary mt-lg-0 mt-md-5 mt-4">Contact Us<span
                        class="fa fa-arrow-right ml-2"></span></a>
            </div>
        </div>
    </div>
</section>
 
@endsection
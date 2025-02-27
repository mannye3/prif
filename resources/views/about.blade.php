@extends('layouts.app')

@section('content')
  <!--/header-->
<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-4">
            <h2 class="title pt-md-5 pt-4">About Us</h2>
            <p class="inner-page-para mt-2">Crafting with meticulous attention to your every DETAIL, always putting your best interests first.</p>
        </div>
        <div class="hero-overlay"></div>
    </div>
</section>
<!-- //about breadcrumb -->
<section class="w3l-aboutblock1" id="about">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="position-relative">
                        <img src="https://image.freepik.com/free-photo/people-shaking-hands-toy-model-house_23-2148301743.jpg" alt="" class="img-fluid radius-image-full">
                        <div class=""> </div>
                        {{-- <div class="imginfo__box">
                            <div class="imginfo__info">
                                <h6 class="imginfo__title">8+</h6>
                                <p class="mt-1">Years of <br>Experience</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5 about-right-faq align-self  wow fadeInUp" data-wow-delay=".2s">
                    <h5 class="title-small mb-1">About our company</h5>
                    <h3 class="title-big">Boomanage Properties.</h3>
                    {{-- <h4 class="mt-4">LEADROITT REALTY LIMITED is a cutting edge real estate company with experience and expertise in designing, developing and managing homes and properties.</h4> --}}
                    <p class="mt-4" style="">We are a distinguished indigenous Real Estate and Business Development firm renowned for our proficiency in Real Estate Development, Dynamic Marketing & Brokerage, Business Initiation & Development Advisory, Real Estate Training, Management, Investment, Mortgage Advisory, and Consultancy services.
                    </p>
                    <p class="mt-4" style="">Our dedicated team of professionals is committed to delivering expert advisory services, strategically designed to create enduring and substantial value for our esteemed clientele.
                    </p>



                </div>
            </div>

            <div class="row justify-content-center mt-5 pt-lg-5">
                <div class="col-lg-6 col-md-6 grids-feature wow fadeInUp" data-wow-delay=".2s">
                    <div class="area-box" style="min-height: 300px;">
                        <i class="fa fa-bullseye" aria-hidden="true"></i>
                        <div class="area-box-info">
                            <h4><a href="#feature" class="title-head">Our Mision</a></h4>
                            <p>To consistently deliver a delightful and hassle-free buying and selling experience for our wide-ranging clientele.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 grids-feature mt-md-0 mt-4 wow fadeInUp" data-wow-delay=".4s">
                    <div class="area-box" style="min-height: 300px;">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                        <div class="area-box-info">
                            <h4><a href="#feature" class="title-head">Our Vision</a></h4>
                            <p>To establish ourselves as the premier real estate firm, prioritizing quality, fair pricing, and value delivery as our foremost principles in property transactions.</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4 wow fadeInUp" data-wow-delay=".6s">
                    <div class="area-box" style="min-height: 300px;">
                        <i class="fa fa-paper-plane " aria-hidden="true"></i>
                        <div class="area-box-info">
                            <h4><a href="#feature" class="title-head">Our Planning</a></h4>
                            <p>By being the foremost self-regulated real estate development company in Nigeria, bringing back home the trust of the highest risk-averse real estate investors.</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>




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
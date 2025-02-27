@extends('layouts.app')

@section('content')

<!-- //about breadcrumb -->

<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-4">
            <h2 class="title pt-md-5 pt-4">{{$data->name}}</h2>
            <p class="inner-page-para mt-2">{{$data->property_location}}</p>
        </div>
        <div class="hero-overlay"></div>
    </div>
</section>
<!-- //Blog single breadcrumb -->
<!-- single post -->
<section class="text-11 py-5">
    <div class="text11 py-lg-5 py-md-4">
        <div class="container">
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
            <div class="text11-content">
                <img src="{{ asset('/properties/' . $data->property_picture) }}" class="img-fluid radius-image w-100 " />
                <h4 class="wow fadeInUp" data-wow-delay=".2s">{{$data->name}}</h4>
                    <div class="buttons-singles tags wow fadeInUp" data-wow-delay=".2s">
                        <h5 style="font-size:18px;">Features :</h5>
                        <a href="#" class="btn btn-style btn-outline-primary wow fadeInUp" data-wow-delay=".2s" style="font-size:13px;"><span class="fa fa-home" aria-hidden="true"></span> {{$data->property_type}}</a>
                        
                        <a href="#" class="btn btn-style btn-outline-primary wow fadeInUp" data-wow-delay=".4s" style="font-size:13px;"><span class="fa fa-bed" aria-hidden="true"></span> {{$data->property_bed}} Bedrooms</a>
                        {{-- <a href="#" class="btn btn-style btn-outline-primary wow fadeInUp" data-wow-delay=".6s" style="font-size:13px;"><span class="fa fa-power-off" aria-hidden="true"></span> 24 hrs power supply</a>
                        <a href="#" class="btn btn-style btn-outline-primary wow fadeInUp" data-wow-delay=".8s" style="font-size:13px;"><span class="fa fa-car" aria-hidden="true"></span> Ground Floor Parking</a>
                        <a href="#" class="btn btn-style btn-outline-primary wow fadeInUp" data-wow-delay=".8s" style="font-size:13px;"><span class="fa fa-tint" aria-hidden="true"></span> Water Treatment Plant</a> --}}
                    </div>
                     {{-- <style>
                
                .property_text{
                margin: 0;
                padding: 0;
                font-size: 17px;
                line-height: 27px;
                color: var(--font-color);
                opacity: .8;
                font-family: 'Jost', sans-serif;
                } 
                </style> --}}
                     
                <p class="mt-4 mb-4 wow fadeInUp" data-wow-delay=".2s" style="">{!!$data->property_desc!!}</p>

               <br> 

                <div class="row">
                @foreach($property_pictures as $pictures)
                <div class="col-lg-4 col-md-6 item wow fadeInUp" data-wow-delay=".2s">
                    <a href="{{ asset('/properties/' . $pictures->name) }}" data-lightbox="example-set" class="zoom d-block">
                        <img class="card-img-bottom d-block"  src="{{ asset('/properties/' . $pictures->name) }}"
                            alt="Card image cap">
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">&nbsp;</span>
                          
                        </span>
                    </a>
                </div>
                @endforeach
                </div>

                <br>
                <div class="leave-comment-form wow fadeInUp" data-wow-delay=".4s" id="comment">
                    <h3 class="aside-title">Book for an Inspection</h3>
                    <form method="post" action="{{route('propertybooking')}}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Full Name" required="">
                        </div>
                        <div class="input-grids">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Your Email" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="Your Phone Number" required="">
                                <input hidden name="property_name" class="form-control" value="{{$data->name}}">
                                <input hidden name="property_link" class="form-control" value="{{$currenturl = URL::full();}}">
                            </div>
                        </div>

                          <div class="form-group">
                            <textarea  name="message" class="form-control" required=""> </textarea>
                        </div>
                        
                        <br>
                        <div class="submit text-left">
                            <button type="submit" class="btn btn-style btn-primary">Book Inspection</a>
                        </div>
                    </form>
                </div>
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


<style>
    .responsive-image {
    max-width: 100%; /* Ensures the image doesn't exceed the width of the viewport */
    height: auto;    /* Maintains the image's aspect ratio */
}
</style>

@endsection
@extends('layouts.app')

@section('content')
 <section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-4">
            <h2 class="title pt-md-5 pt-4">Our Projects</h2>
            <p class="inner-page-para mt-2">We design and develop modern and affordable luxury homes.</p>
        </div>
        <div class="hero-overlay"></div>
    </div>
</section>
<!-- //about breadcrumb -->

<!--  //services section -->
<section class="w3l-gallery py-5" id="gallery">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="title-content text-center mb-5 wow fadeInUp" data-wow-delay=".2s">
            
            <h3 class="title-big mx-lg-5">Our Properties</h3>
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
           
        
        </div>
        <!-- Company logos -->
        <br><br><br><br>
        <div class="text-center w-100 mt-md-5 mt-4">
                 {{ $data->links("pagination::bootstrap-4",["blog-pagination page-item justify-content-center" => "pagination justify-content-center"]) }}
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
@extends('layouts.master')

@section('content')
    <div class="parallax titlebar" data-background="images/place.jpg" data-color="#333333" data-color-opacity="0.7"
        data-img-width="800" data-img-height="505">

        <div id="titlebar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h2>Property For Sale in Nigeria.</h2>
                        {{-- <span>Grid Layout With Sidebar</span> --}}

                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>Sale</li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Content
                                    ================================================== -->
 <div class="container">
	<div class="row fullwidth-layout">

		<div class="col-md-12">

			<!-- Sorting / Layout Switcher -->
			<div class="row margin-bottom-15">

				<div class="col-md-6">
					<!-- Sort by -->
					<div class="sort-by">
						<label>Sort by:</label>

						<div class="sort-by-select">
							<select data-placeholder="Default order" class="chosen-select-no-single" >
								<option>Default Order</option>	
								<option>Price Low to High</option>
								<option>Price High to Low</option>
								<option>Newest Properties</option>
								<option>Oldest Properties</option>
							</select>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<!-- Layout Switcher -->
					<div class="layout-switcher">
						<a href="#" class="list"><i class="fa fa-th-list"></i></a>
						<a href="#" class="grid"><i class="fa fa-th-large"></i></a>
						<a href="#" class="grid-three"><i class="fa fa-th"></i></a>
					</div>
				</div>
			</div>

			
			<!-- Listings -->
			<div class="listings-container list-layout">

				
                  @foreach ($data as $key => $property)
				<!-- Listing Item -->
				<div class="listing-item">

					<a href="single-property-page-1.html" class="listing-img-container">

						<div class="listing-badges">
							<span>For Sale</span>
						</div>

						<div class="listing-img-content">
							<span class="listing-price">$900 <i>monthly</i></span>
							<span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
							<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
						</div>

						<img style="height: 270px; width: 360px" src="{{ asset('/properties/' . $property->property_picture) }}" alt="">

					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="#">Serene Uptown</a></h4>
							<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
								<i class="fa fa-map-marker"></i>
								6 Bishop Ave. Perkasie, PA
							</a>

							<a href="single-property-page-1.html" class="details button border">Details</a>
						</div>

						<ul class="listing-details">
							<li>440 sq ft</li>
							<li>1 Bedroom</li>
							<li>1 Room</li>
							<li>1 Bathroom</li>
						</ul>

						<div class="listing-footer">
							<a href="#"><i class="fa fa-user"></i> Harriette Clark</a>
							<span><i class="fa fa-calendar-o"></i> 2 days ago</span>
						</div>

					</div>

				</div>
                @endforeach
				<!-- Listing Item / End -->


				
				<!-- Listing Item / End -->

			</div>
			<!-- Listings Container / End -->

			<div class="clearfix"></div>
			<!-- Pagination -->
			<div class="pagination-container margin-top-20">
				<nav class="pagination">
					<ul>
						<li><a href="#" class="current-page">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li class="blank">...</li>
						<li><a href="#">22</a></li>
					</ul>
				</nav>

				<nav class="pagination-next-prev">
					<ul>
						<li><a href="#" class="prev">Previous</a></li>
						<li><a href="#" class="next">Next</a></li>
					</ul>
				</nav>
			</div>
			<!-- Pagination / End -->

		</div>

	</div>
</div>
@endsection

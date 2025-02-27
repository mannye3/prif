@extends('layouts.admin')

@section('content')




  <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Add New Property</h3>
                                        </div><!-- .nk-block-head-content -->
                                       
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered card-stretch">
                                        <div class="card-inner">
                                             <form  method="POST" action="{{ route('store_property')}}" enctype="multipart/form-data">
                                                    @csrf
                                            <h5 class="title">Ride Details</h5>
                                            <div class="row gy-4 pt-3">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Property Title</label>
                                                        <div class="form-control-wrap">
                                                            <div class="d-flex gx-3">
                                                                <div class="g w-100">
                                                                    <div class="form-control-wrap">
                                                                          <input type="text" class="form-control" placeholder="e.g. Honda" name="name" required>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               <div class="col-lg-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="price">Price</label>
                                                        <div class="form-control-wrap">
                                                            <input type="number" name="price" class="form-control" id="price" placeholder="e.g. $100.00" required>
                                                        </div>
                                                    </div>
                                                </div>
                                              
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="qty">Property Category</label>
                                                        <div class="form-control-wrap">
                                                             <select class="form-control" required name="property_cat"> 
                                                                <option value>Category</option> 
                                                                <option value="Sale">Sale</option> 
                                                                <option value="Rent">Rent</option>
                                                               
                                                                </select>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-lg-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="qty">Property Type</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-control" required name="property_type"> 
                                                                <option value>Type</option> 
                                                                <option value="commercial-property/shop">Shop</option> 
                                                                <option value="commercial-property/office-space">Office Spaces</option>
                                                                <option value="flat-apartment" selected>Flats and Apartments</option>
                                                                <option value="land">Lands</option> 
                                                                <option value="house/semi-detached-bungalow">Semi Detached Bungalow</option> 
                                                                <option value="house/semi-detached-duplex">Semi Detached Duplex</option> 
                                                                <option value="co-working-space">Co-working Space</option>
                                                                <option value="house/detached-bungalow">Detached Bungalow</option> 
                                                                <option value="commercial-property/warehouse">Warehouse</option> 
                                                                <option value="commercial-property/shop-in-a-mall">Shop In A Mall</option> 
                                                                <option value="flat-apartment/self-contain">Self Contain</option> 
                                                                <option value="flat-apartment/mini-flat">Mini Flats</option> 
                                                                <option value="house/detached-duplex">Detached Duplex</option> 
                                                                <option value="house">Houses</option> 
                                                                <option value="house/terraced-bungalow">Terraced Bungalow</option> 
                                                                <option value="commercial-property">Commercial Properties</option> 
                                                                <option value="house/terraced-duplex">Terraced Duplex</option> 
                                                                </select>

                                                           
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-lg-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="qty">Bedrooms</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-control" name="property_bed"> 
                                                            <option value>beds</option> 
                                                            <option value="1">1</option>
                                                            <option value="2">2</option> 
                                                            <option value="3">3</option> 
                                                            <option value="4">4</option> 
                                                            <option value="5">5</option> 
                                                            <option value="6">6</option> 
                                                            <option value="7">7</option> 
                                                            <option value="8">8</option> 
                                                            <option value="9">9</option> 
                                                            <option value="10">10</option>
                                                            </select>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <!--row-->
                                           
                                            <div class="row gy-4 pt-3">

                                                 <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="file">Property Location</label>
                                                    <div class="form-control-wrap">
                                                        <div class="custom-file">
                                                            <input type="text" name="property_location" class="form-control">
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                                <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="file">Property Picture</label>
                                                    <div class="form-control-wrap">
                                                        <div class="custom-file">
                                                            <input type="file" name="property_picture" class="custom-file-input" id="file">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                                <div class="col-lg-12 col-md-6">
                                                    
                                                    <div class="form-group">
                                                        <label class="form-label">Ride Description</label>
                                                        <div class="form-control-wrap">
                                                            <textarea name="property_desc" class="summernote-minimal"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <div class="form-group mt-4">
                                                <button  type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                        <!--card inner-->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>





@endsection
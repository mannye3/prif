@extends('layouts.admin')

@section('content')
 <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    
  <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Add Pictures </h3>
                                        </div><!-- .nk-block-head-content -->
                                       
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    
                                    <div class="card card-bordered card-stretch">
                                        <div class="card-inner">
                                             <div class="row">
                                                    <div class="col-md-12">
                                                        <h3>{{$property->name}}</h3>
                                                
                                                        <form action="{{ route('propertpicties', $property->id) }}" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone">
                                                            @csrf
                                                            <div>
                                                                <h6>Upload Property Pictures By Click On Box</h6>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                             <form  method="POST" action="{{ route('store_property')}}" enctype="multipart/form-data">
                                                    @csrf
                                           
                                           
                                            <div class="form-group mt-4">
                                                <a  href="{{url('properties')}}" type="button" class="btn btn-primary">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                        <!--card inner-->
                                        
                                    </div><!-- .card -->
                                     @if(!empty($property_pics)) 
                                    
                                    <div class="row g-gs"> @foreach($property_pics as $pictures)
                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="gallery card card-bordered">
                                                <a class="gallery-image popup-image" href="{{ asset('/properties/' . $pictures->name) }}">
                                                    <img class="w-100 rounded-top" src="{{ asset('/properties/' . $pictures->name) }}" alt="">
                                                </a>
                                                <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                                    <div class="user-card">
                                                       
                                                            <form action="{{ route('deletepics', $pictures->id) }}" method="POST">
                                                                @csrf
                                                                  <button type="submit" class="btn btn-dim btn-danger">Delete</button>
                                                            </form>
                                                         
                                                        
                                                        
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                         @endforeach
                                        
                                    </div>
                                   
                                    @endif
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>



<script type="text/javascript">
  
        Dropzone.autoDiscover = false;
  
        var dropzone = new Dropzone('#image-upload', {
              thumbnailWidth: 200,
              maxFilesize: 1,
              acceptedFiles: ".jpeg,.jpg,.png,.gif"
            });
  
</script>

@endsection
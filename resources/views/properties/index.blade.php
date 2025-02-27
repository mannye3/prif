@extends('layouts.admin')

@section('content')


 <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Properties</h3>
                                            <div class="nk-block-des text-soft">
                                                <!-- <p>Client Report details.</p> -->
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                    
                                                        <li class="nk-block-tools-opt">
                                                            <a href="{{route('add_property')}}" class="btn btn-primary"><em class="icon ni ni-plus"></em>
                                                                <span>Add New</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                      <div class="example-alert">
                                            @if (\Session::has('success'))
                                     <div class="alert alert-success alert-icon alert-dismissible">
                                        <em class="icon ni ni-check-circle"></em>  <strong> {{ \Session::get('success') }}<button class="close" data-dismiss="alert"></button>
                                            </div>
                                            @endif


                                            @if (count($errors) > 0)
                                            <div><div class="alert alert-danger alert-icon alert-dismissible">
                                                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                        <button class="close" data-dismiss="alert"></button>
                                                   </div>
                                                   @endif

                                            
                                                                
                                    </div>
                                    <div class="card card-bordered card-stretch">
                                        <div class="card-inner-group">
                                            <div class="card-inner p-0">
                                                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
                                                           <th class="nk-tb-col"><span class="sub-text">S/N</span></th>
                                                           <th class="nk-tb-col tb-col-md"><span class="sub-text">Thumbnail</span></th>
                                                            <th class="nk-tb-col"><span class="sub-text"> Name</span></th> 
                                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Price</span></th>
                                                            <th class="nk-tb-col"><span class="sub-text">Propety Category</span></th>
                                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Property Type</span></th>
                                                            <th class="nk-tb-col"><span class="sub-text">Status</span></th>
                                                            {{-- <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Status</span></th>
                                                            <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Brand</span></th> --}}
                                                            <th class="nk-tb-col nk-tb-col-tools text-right">
                                                               
                                                            </th>
                                                        </tr><!-- .nk-tb-item -->
                                                    </thead>
                                                    <tbody>
                                                         @foreach ($data as $key => $ride)
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col nk-tb-col-check">
                                                             {{ $loop->iteration }}
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                 <img  height="90" width="150" src="{{ asset('/properties/' . $ride->property_picture) }}" /> 
                                                                </td>
                                                            <td class="nk-tb-col">
                                                                <a href="#" class="project-title">
                                                                    <div class="product-info">
                                                                        <h6 class="title">{{ $ride->name }}</h6>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                           
                                                             
                                                            <td class="nk-tb-col tb-col-lg">
                                                                <h6>
                                                                    @php echo number_format($ride->price)@endphp
                                                                </h6>
                                                            </td>
                                                            <td class="nk-tb-col">
                                                                <h6 class="title">{{ $ride->property_cat }}</h6>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-lg">
                                                                <h6>{{ $ride->property_type }}</h6>
                                                            </td>
                                                            <td class="nk-tb-col">
                                                                @if($ride->status == 1)
                                                              <span class="badge badge-dim badge-success">Active</span>

                                                                @endif
                                                            </td>
                                                            {{-- <td class="nk-tb-col tb-col-xxl">
                                                                <span class="badge badge-dim badge-outline-primary">Available</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-xxl">
                                                                <span>Samsung</span>
                                                            </td> --}}
                                                            <td class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-1">
                                                                    <li>
                                                                        <div class="drodown">
                                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                                <ul class="link-list-opt no-bdr">
                                                                                   
                                                                                    <li><a href="{{route('edit_property', $ride->id)}}" ><em class="icon ni ni-edit"></em><span>Edit Property</span></a></li>
                                                                                    <li><a href="#" data-toggle="modal" data-target="#deleteGroup-{{$ride->id}}"><em class="icon ni ni-delete"></em><span>Delete Property</span></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr><!-- .nk-tb-item -->
                                                        @endforeach
                                                       
                                                    </tbody>
                                                </table><!-- .nk-tb-list -->
                                            </div><!-- .card-inner -->
                                          
                                        </div><!-- .card-inner-group -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>






                <!-- @@  Delete Modal @e -->
@foreach ($data as $key => $ride)
<div class="modal fade" id="deleteGroup-{{$ride->id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross"></em></a>
            <div class="modal-body modal-body-sm text-center">
                <div class="nk-modal py-4">
                    <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                    <h4 class="nk-modal-title">Are You Sure ?</h4>
                    <div class="nk-modal-text mt-n2">
                        <p class="text-soft">This  data will be delete permanently.</p>
                    </div>
                    <ul class="d-flex justify-content-center gx-4 mt-4">
                        <li>
                            <form  method="POST" action="{{ route('deleteproperty', $ride->id)}}" >
                                @csrf
                                <button type="submit" id="deleteOrg" class="btn btn-success">Yes, Delete it</button>
                            </form>

                        
                        </li>
                        <li>
                            <button data-dismiss="modal" data-toggle="modal" data-target="#editEventPopup" class="btn btn-danger btn-dim">Cancel</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach<!-- .modal -->
  

@endsection
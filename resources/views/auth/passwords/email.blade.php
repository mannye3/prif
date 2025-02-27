

@extends('layouts.auth')

@section('content')

 <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="#" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="{{ asset('assets/images/boomlogo2.jpg')}}" srcset="{{ asset('assets/images/boomlogo2.jpg')}} 2x" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="{{ asset('assets/images/boomlogo2.jpg')}}" srcset="{{ asset('assets/images/boomlogo2.jpg')}} 2x" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Reset password</h5>
                                        <div class="nk-block-des">
                                            <p>If you forgot your password, well, then we’ll email you instructions to reset your password.</p>
                                        </div>
                                    </div>
                                </div>
                                @if (\Session::has('message'))
                                    <div class="alert alert-success alert-dismissible fade show mb-0 text-center" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        <strong>{{ \Session::get('message') }}</strong>
                                    </div>

                                    @endif
                                <form method="POST" class="mt-4" action="{{ route('Adminforgetpassword') }}"  >
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Email</label>
                                        </div>
                                        <div class="form-control-wrap">
                                          

                                             <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" name="email"   autocomplete="email" autofocus placeholder="Enter email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">Send Reset Link</button>
                                    </div>
                                </form>
                                <div class="form-note-s2 text-center pt-4">
                                    <a href="{{ route('login') }}"><strong>Return to login</strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
             
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>


      

    

        @endsection        





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
                                        <h4 class="nk-block-title">Sign-In</h4>
                                        <div class="nk-block-des">
                                            <p>Using your email and password.</p>
                                        </div>
                                    </div>
                                </div>
                                  @if (Session::has('success'))
                                    <div class="alert alert-success alert-dismissible fade show mb-0 text-center" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    {{ Session::get('success') }}
                                         </div>
                                         @endif
                                      
                                        @if (\Session::has('error'))
                                        <div class="alert alert-danger alert-dismissible fade show mb-0 text-center" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            <strong>{{ \Session::get('error') }}</strong>
                                        </div>
                                        @endif
                                    <form method="POST" class="mt-4" action="{{ route('Adminlogin') }}"  >
                                        @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Email</label>
                                        </div>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" name="email"   autocomplete="email" autofocus placeholder="Enter your email address">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror


                                           
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{-- <div class="form-label-group">
                                            <label class="form-label" for="password">Password</label>
                                            <a class="link link-primary link-sm" href="{{ route('password.request') }}">Forgot Password?</a>
                                        </div> --}}
                                        <div class="form-control-wrap">
                                          

                                             <input type="password" name="password" class="form-control form-control-l  @error('password') is-invalid @enderror" name="password" placeholder="Enter your password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror


                                           
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
                                    </div>
                                </form>
                               
                                
                               
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

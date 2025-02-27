

@extends('layouts.auth')

@section('content')

        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card overflow-hidden">
                            <div class="bg-secondary">
                                <div class="text-primary text-center p-4">
                                    
                                    {{-- <p class="text-black-50">Financial Markets Regulations & Rules Repository Portal</p> --}}
                                    <a href="" class="logo">
                                        <img src="{{ asset('public/assets/images/FMDQlogo.svg')}}" height="45" alt="logo">
                                    </a>
                                    <h5 class="font-size-20" style="color: #22346C">Finrrrrrancial Markets Regulations & Rules Repository Portal</h5>
                                </div>
                            </div>
    
                            <div class="card-body p-4">
                                <div class="p-3">
                                  
                               @if (Session::has('message'))
                                <div class="alert alert-success text-center mb-4" role="alert">
                                {{ Session::get('message') }} 
                                @endif     
                                    
                                 @if (Session::has('message'))
                                <div class="alert alert-success text-center mb-4" role="alert">
                                {{ Session::get('message') }}
                                     </div>
                                     @endif
                
                                     @if (Session::has('error'))
                                     <div class="alert alert-danger text-center mb-4" role="alert">
                                     {{ Session::get('error') }}
                                          </div>
                                          @endif
                                <form method="POST" class="mt-4" action="{{ route('Adminresetpasswordsubmit') }}"  >
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">

                                 
                                <div class="mb-3">
                                    <label class="form-label" for="username">Email</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" name="email"   autocomplete="email" autofocus placeholder="Enter email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="userpassword">Password</label>
                                    <input type="password" name="password"  class="form-control  @error('password') is-invalid @enderror" name="userpassword" placeholder="Enter password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <p><h6>Password Policy</h6></p>
                                <ul class="list-unstyled">
                                <li>- Password must contain at least eight characters</li>
                                <li>-  Password must be different from username</li>
                                <li>-  Password must contain at least one number (0-9)</li>
                                <li>-  Password must contain at least one lowercase letter (a-z)</li>
                                <li>-  Password must contain at least one uppercase letter (A-Z)</li>
                                </ul>




                                <div class="mb-3">
                                    <label class="form-label" for="userpassword">Confirm Password</label>
                                    <input type="password" name="password_confirmation"   class="form-control  @error('password') is-invalid @enderror" name="userpassword" placeholder="Confirm Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
    

                               
    
                                <div class="mb-3 row">
                                    <div class="col-sm-6">
                                      
                                    </div>
                                    <div class="col-sm-6 text-end">
                                        <div class="col-sm-6 text-end">
                                            <button class="btn btn-primary w-md waves-effect waves-light" name="SUBMIT" id="submit" onclick="loading(); setTimeout('document.getElementById(\'' + this.id + '\').disabled=true;', 50);   " type="submit">
                                                <i class="fas fa-spinner fa-spin" style="display:none;"></i>
                                               <span class="btn-text">Reset</span>
                                             </button>
                                        {{-- <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset</button> --}}
                                    </div>
                                </div>

                               

                            </form>
                                <div class="mt-5 text-center">
                                    <p>Remember It ? <a href="{{ route('login') }}" class="fw-medium text-primary"> Sign In here </a> </p>
                                    <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> FMDQ Group</p>
                                </div>
    
                                </div>
                            </div>
    
                        </div>
    
    
    
                    </div>
                </div>
            </div>
        </div>

    

        @endsection 


















































{{-- @extends('layouts.auth')

@section('content')
        <div class="wrapper-page account-page-full">

            <div class="card shadow-none">
                <div class="card-block">

                    <div class="account-box">
                        
                        <div class="card-box shadow-none p-4">
                            <div class="p-2">
                                <div class="text-center mt-4">
                                    <a href="index.html"><img src="{{ asset('public/assets/images/FMDQlogo.svg')}}" height="45" alt="logo"></a>
                                </div>

                                <h4 class="font-size-18 mt-5 text-center">Reset Password</h4>
                             
                                {{-- @if (Session::has('message'))
                                <div class="alert alert-success text-center mb-4" role="alert">
                                {{ Session::get('message') }} --}}
                                        
                                    
                                {{-- @if (Session::has('message'))
                                <div class="alert alert-success text-center mb-4" role="alert">
                                {{ Session::get('message') }}
                                     </div>
                                     @endif
                
                                     @if (Session::has('error'))
                                     <div class="alert alert-danger text-center mb-4" role="alert">
                                     {{ Session::get('error') }}
                                          </div>
                                          @endif
                                <form method="POST" class="mt-4" action="{{ route('Adminresetpasswordsubmit') }}"  >
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">

                                 
                                <div class="mb-3">
                                    <label class="form-label" for="username">Email</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" name="email"   autocomplete="email" autofocus placeholder="Enter email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="userpassword">Password</label>
                                    <input type="password" name="password" required class="form-control  @error('password') is-invalid @enderror" name="userpassword" placeholder="Enter password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <p><h6>Password Policy</h6></p>
                                <ul class="list-unstyled">
                                <li>- Password must contain at least eight characters</li>
                                <li>-  Password must be different from username</li>
                                <li>-  Password must contain at least one number (0-9)</li>
                                <li>-  Password must contain at least one lowercase letter (a-z)</li>
                                <li>-  Password must contain at least one uppercase letter (A-Z)</li>
                                </ul>




                                <div class="mb-3">
                                    <label class="form-label" for="userpassword">Confirm Password</label>
                                    <input type="password" name="password_confirmation" required  class="form-control  @error('password') is-invalid @enderror" name="userpassword" placeholder="Enter password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
    

                               
    
                                <div class="mb-3 row">
                                    <div class="col-sm-6">
                                      
                                    </div>
                                    <div class="col-sm-6 text-end">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset</button>
                                    </div>
                                </div>

                               

                            </form>

                            <div class="mt-5 pt-4 text-center">
                                <p>Remember It ? <a href="{{ route('login') }}" class="fw-medium text-primary"> Sign In here </a> </p>
                                <p>© <script>document.write(new Date().getFullYear())</script> Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                            </div>

                        </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    

        @endsection     --}} 




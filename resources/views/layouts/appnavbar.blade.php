 <header class="header">
            <div class="container-fluid">
               <nav class="navbar navbar-expand-lg header-nav">
                  <div class="navbar-header">
                     <a id="mobile_btn" href="javascript:void(0);">
                     <span class="bar-icon">
                     <span></span>
                     <span></span>
                     <span></span>
                     </span>
                     </a>
                     <a href="index.html" class="navbar-brand logo">
                     <img src="{{ asset('public/assets/img//newdsl_logo.jpg')}}" width="80" height="80" class="img-fluid" alt="Logo">
                     </a>
                     <a href="index.html" class="navbar-brand logo-small">
                     <img src="{{ asset('public/assets/img//newdsl_logo.jpg')}}" width="80" height="80" class="img-fluid" alt="Logo">
                     </a>
                  </div>
                  <div class="main-menu-wrapper">
                     <div class="menu-header">
                        {{-- <a href="" class="menu-logo">
                        <img src="{{ asset('public/assets/img/newdsl_logo.jpg')}}" style="height: 80px" class="img-fluid" alt="Logo">
                        </a> --}}
                        <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
                     </div>
                     <ul class="main-nav">
                        <li class=""><a href="{{url('/')}}">Home</a></li>
                        <li class=""><a href="{{route('about')}}">About Us</a></li>
                        <li class=""><a href="{{route('services')}}">Our Services</a></li>
                        <li class=""><a href="{{route('contact')}}">Contact Us</a></li>
                       
                     </ul>
                  </div>
                  <ul class="nav header-navbar-rht">
                     {{-- <li class="nav-item">
                        <a class="nav-link header-login" href="login.html"><span><i class="fa-regular fa-user"></i></span>Sign In</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link header-reg" href="register.html"><span><i class="fa-solid fa-lock"></i></span>Sign Up</a>
                     </li> --}}
                  </ul>
               </nav>
            </div>
         </header>

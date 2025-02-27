



<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-menu-trigger">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                    <div class="nk-sidebar-brand">
                        <a href="#" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="{{ asset('assets/images/boomlogo2.jpg')}}" srcset="{{ asset('assets/images/boomlogo2.jpg')}} 2x" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="{{ asset('assets/images/boomlogo2.jpg')}}" srcset="{{ asset('assets/images/boomlogo2.jpg')}} 2x" alt="logo-dark">
                            </a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element nk-sidebar-body">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="{{route('dashboard')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="{{url('users')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                        <span class="nk-menu-text">Users</span>
                                    </a>
                                  
                                </li><!-- .nk-menu-item -->
                               
                                   <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-task-fill-c"></em></span>
                                        <span class="nk-menu-text">Roles and Persmissions</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{url('roles')}}" class="nk-menu-link"><span class="nk-menu-text">Roles</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{url('permissions')}}" class="nk-menu-link"><span class="nk-menu-text">Persmissions</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                               
                            
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-home"></em></span>
                                        <span class="nk-menu-text">Property Management</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{url('properties')}}" class="nk-menu-link"><span class="nk-menu-text">Properties</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{url('add_property')}}" class="nk-menu-link"><span class="nk-menu-text">Add Property</span></a>
                                        </li>
                                        
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                {{-- <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-growth-fill"></em></span>
                                        <span class="nk-menu-text">Report</span>
                                    </a>
                                    
                                </li><!-- .nk-menu-item --> --}}
                               
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>




          
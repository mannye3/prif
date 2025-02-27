<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
       <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png')}}">
    <!-- Page Title  -->
    <title>Dashboard | CRM | DashLite Admin Template</title>
    <!-- StyleSheets  -->
     <link rel="stylesheet" href="{{ asset('admin/assets/css/dashlite.css')}}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('admin/assets/css/theme.css')}}">
    
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">

           
            @include('layouts.adminsidebar')
            @include('layouts.adminheader')
            
            @yield('content')
            

                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            {{-- <div class="nk-footer-copyright"> &copy; 2021 DashLite. Template by <a href="https://softnio.com" target="_blank">Softnio</a>
                            </div> --}}
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                   
                                    <li class="nav-item">
                                        <p class="mb-0 text-muted">&copy; <script>document.write(new Date().getFullYear())</script>  </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


     <script src="{{ asset('admin/assets/js/bundle.js')}}"></script>
    <script src="{{ asset('admin/assets/js/scripts.js')}}"></script>
    <script src="{{ asset('admin/assets/js/charts/chart-crm.js')}}"></script>


    <link rel="stylesheet" href="{{ asset('admin/assets/css/editors/summernote.css')}}">
    <script src="{{ asset('admin/assets/js/libs/editors/summernote.js')}}"></script>
    <script src="{{ asset('admin/assets/js/editors.js')}}"></script>
</body>

</html>
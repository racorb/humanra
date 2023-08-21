<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

        <!-- General CSS Files -->
        <link rel="stylesheet" href="{{asset('/')}}portal-html/assets/css/app.min.css">
        <!-- Template CSS -->
        <link rel="stylesheet" href="{{asset('/')}}portal-html/assets/css/style.css">
        <link rel="stylesheet" href="{{asset('/')}}portal-html/assets/css/components.css">
        @yield('css')
        <!-- Custom style CSS -->
        <link rel="stylesheet" href="{{asset('/')}}portal-html/assets/css/custom.css">        
        
        <!-- Title & Shortcut Icon -->
        <title>Humanra | @yield("title")</title>
        <link rel='shortcut icon' type='image/x-icon' href="{{asset('/')}}portal-html/assets/img/favico.svg" />
        <style>
            .breadcrumb{
                background:none
            }
        </style>      
    </head>

    <body>
        <div class="loader"></div>
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                <div class="navbar-bg"></div>
                @include('portal.layouts.header')
            
                @include('portal.layouts.navigation')
                <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="row">
                            <div class="col-12">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('portal.dashboard')}}">Ana Səhifə</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">@yield("title")</li>
                                    </ol>
                                </nav>
                            </div>                           
                        </div>
                        @yield('content')
                    </section>
                </div>                
            </div>
        </div>
        <!-- General JS Scripts -->
        <script src="{{asset('/')}}portal-html/assets/js/app.min.js"></script>
        @yield('js')  
        <!-- Template JS File -->
        <script src="{{asset('/')}}portal-html/assets/js/scripts.js"></script>
        <!-- Custom JS File -->
        <script src="{{asset('/')}}portal-html/assets/js/custom.js"></script>        
    </body>
</html>
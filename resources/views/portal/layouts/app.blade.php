<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

        <!-- General CSS Files -->
        <link rel="stylesheet" href="{{asset('/')}}portal-html/assets/css/app.min.css">
        <link rel="stylesheet" href="{{asset('/')}}portal-html/assets/bundles/fontawesome/css/all.min.css">
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

        <!-- Modal Payment -->
        <div class="modal fade" id="modalPayment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalPayment">ÖDƏNİŞ ÜSULU</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="accordion">
                            @php $banksPayment = \DB::table('banks')->where('status', 0)->get(); @endphp
                            @if($banksPayment->count() > 0)
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-1"
                                aria-expanded="true">
                                    <h4>Bank kartı</h4>
                                </div>
                                <div class="accordion-body collapse show" id="panel-body-1" data-parent="#accordion">
                                    <div class="d-flex align-items-center justify-content-between" style="flex-wrap: wrap;">
                                        @foreach($banksPayment as $bankPayment)
                                        <div class="mt-2 mr-2 mb-2">
                                            <a href="#"><img alt="{{$bankPayment->name}}" src="{{asset('/')}}portal-html/assets/img/banks/kapitalbank.png" style="width:140px" /></a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-2">
                                <h4>Şəxsi hesab (0,00 AZN)</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-2" data-parent="#accordion">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
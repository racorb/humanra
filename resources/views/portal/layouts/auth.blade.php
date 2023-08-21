<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        
        <!-- General CSS Files -->
        <link rel="stylesheet" href="{{asset('/')}}portal-html/assets/css/app.min.css">
        <link rel="stylesheet" href="{{asset('/')}}portal-html/assets/bundles/bootstrap-social/bootstrap-social.css">
        <!-- Template CSS -->
        <link rel="stylesheet" href="{{asset('/')}}portal-html/assets/css/style.css">
        <link rel="stylesheet" href="{{asset('/')}}portal-html/assets/css/components.css">
        <!-- Custom style CSS -->
        <link rel="stylesheet" href="{{asset('/')}}portal-html/assets/css/custom.css">

        <!-- Title & Shortcut Icon -->
        <title>Humanra | @yield("title")</title>
        <link rel='shortcut icon' type='image/x-icon' href="{{asset('/')}}portal-html/assets/img/favico.svg" />

        @yield("css")
    </head>

    <body>
        <div class="loader"></div>
        <div id="app">
            @yield("content")
        </div>
        <!-- General JS Scripts -->
        <script src="{{asset('/')}}portal-html/assets/js/app.min.js"></script>
        <!-- JS Libraies -->
        <!-- Page Specific JS File -->
        <!-- Template JS File -->
        <script src="{{asset('/')}}portal-html/assets/js/scripts.js"></script>
        <!-- Custom JS File -->
        <script src="{{asset('/')}}portal-html/assets/js/custom.js"></script>
        @yield("js")
    </body>
</html>
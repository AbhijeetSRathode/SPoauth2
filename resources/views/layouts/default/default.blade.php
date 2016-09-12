@include('js-localization::head')

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
            | Chandra FRONT
        @show
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

    
    @yield('header_scripts')

    
    <meta id="token" name="csrf-token" content="{{ csrf_token() }}" />

</head>

<body>

    <div class="body">
            @include('layouts.default.menu')

        <div role="main" class="main" id="home">
            @include('notifications')
            @include('flash::message')
            @yield('content');
        </div>

        <footer class="short" id="footer">


            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1">
                                <img class="img-responsive" src="{{ asset('img/logo.png')}}">
                        </div>
                        <div class="col-md-11">
                            <p>Copyright 2014/2016. Tous droits réservés.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    
    <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        // public/js/config.js
        $(function () {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
            });
        });
    </script>
    
     <script src="{{ asset('assets/js/jquery.ui.min.js') }}" type="text/javascript"></script>
    
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    

    <script src="{{ asset('assets/vendors/bootstrap-notify/bootstrap-notify.js') }}" type="text/javascript"></script>
    @yield('js-localization.head')
    <script src="/js/main.js"></script>
    @yield('footer_scripts')
    
</body>
</html>
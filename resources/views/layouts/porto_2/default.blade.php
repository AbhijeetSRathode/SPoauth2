@include('js-localization::head')
<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>@yield('title')</title>

        @if(isset($page))
        <meta name="keywords" content="<?= $page[0]['keywords'] ?>" />
        <meta name="description" content="<?= $page[0]['description'] ?>">
        <meta name="author" content="<?= $page[0]['author'] ?>">

        <!-- Favicon
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">-->

        <meta property="og:title" content="<?= $page[0]['og_title'] ?>" />
        <meta property="og:type" content="<?= $page[0]['og_type'] ?>" />
        <meta property="og:url" content="<?= $page[0]['og_url'] ?>" />
        <meta property="og:site_name" content="<?= $page[0]['og_site_name'] ?>" />
        <meta property="og:description" content="<?= $page[0]['og_description'] ?>" />
        <meta property="og:image" content="<?= $page[0]['og_image'] ?>" />
        <meta property="fb:app_id" content="<?= $page[0]['facebook_app_id'] ?>" />

        <meta name="twitter:card" content="<?= $page[0]['twitter_card'] ?>" />
        <meta name="twitter:site" content="<?= $page[0]['twitter_site'] ?>" />
        <meta name="twitter:title" content="<?= $page[0]['twitter_title'] ?>" />
        <meta name="twitter:description" content="<?= $page[0]['twitter_description'] ?>" />
        <meta name="twitter:image:src" content="<?= $page[0]['twitter_img'] ?>" />
        @endif



        <link rel="shortcut icon" href="">





        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">


        @yield('js-localization.head')

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{ asset('/themes/porto_2/vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/themes/porto_2/vendor/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/themes/porto_2/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/themes/porto_2/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/themes/porto_2/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/themes/porto_2/vendor/magnific-popup/magnific-popup.min.css') }}">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('/themes/porto_2/css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('/themes/porto_2/css/theme-elements.css') }}">
        <link rel="stylesheet" href="{{ asset('/themes/porto_2/css/theme-blog.css') }}">
        <link rel="stylesheet" href="{{ asset('/themes/porto_2/css/theme-shop.css') }}">
        <link rel="stylesheet" href="{{ asset('/themes/porto_2/css/theme-animate.css') }}">

        <!-- Current Page CSS -->
        <link rel="stylesheet" href="{{ asset('/themes/porto_2/vendor/rs-plugin/css/settings.css') }}" media="screen">
        <link rel="stylesheet" href="{{ asset('/themes/porto_2/vendor/rs-plugin/css/layers.css') }}" media="screen">
        <link rel="stylesheet" href="{{ asset('/themes/porto_2/vendor/rs-plugin/css/navigation.css') }}" media="screen">
        <link rel="stylesheet" href="{{ asset('/themes/porto_2/vendor/circle-flip-slideshow/css/component.css') }}" media="screen">

        <!-- Skin CSS -->
        <link rel="stylesheet" href="{{ asset('/themes/porto_2/css/skins/default.css') }}">

        <!-- Theme Custom CSS of theme -->
        <link rel="stylesheet" href="{{ asset('/themes/porto_2/css/custom.css') }}">


        <!--****** Theme Custom CSS of site -->
            <link rel="stylesheet" href="{{ asset('/assets/css/porto/custom/')}}{{env('SITE') }}/skin.css">
            <?php
            $css = '/assets/css/porto/custom/'.env('SITE') .'/custom_public.css';
            if(!file_exists($css)){
                $css =  '/assets/css/porto/custom/'.env('SITE') .'/custom.css';
            }  ?>
        <!--****** Theme Custom CSS of site -->

        @yield('header_scripts')

        <!-- Head Libs -->
        <script src="{{ asset('/themes/porto_2/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('/themes/porto_2/vendor/modernizr/modernizr.min.js') }}"></script>

    </head>




    <body class="one-page" data-target="#header" data-spy="scroll" data-offset="100">

        <div class="body">

            <div role="main" class="main" id="home">

                @include('notifications')
                @include('flash::message')
                @yield('content')
            </div>

            <!--<footer class="short" id="footer">-->
                @yield('footer')

            <!--</footer>-->
        </div>

        <!-- Vendor -->
        <!--******** -->
        @yield('footer_scripts')
            <script type="text/javascript">
                // public/js/config.js
                $(function () {
                    $.ajaxSetup({
                        headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
                    });
                });


            </script>
            <meta id="token" name="csrf-token" content="{{ csrf_token() }}" />
            @yield('js-localization.head')

        <!--******** -->
        <script src="{{ asset('/inlinr_assets/js/custom/base.js') }}"></script>
        <script src="{{ asset('/themes/porto_2/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('/themes/porto_2/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('/themes/porto_2/vendor/jquery-cookie/jquery-cookie.min.js') }}"></script>
        <script src="{{ asset('/themes/porto_2/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/themes/porto_2/vendor/common/common.min.js') }}"></script>
        <script src="{{ asset('/themes/porto_2/vendor/jquery.validation/jquery.validation.min.js') }}"></script>
        <script src="{{ asset('/themes/porto_2/vendor/jquery.stellar/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('/themes/porto_2/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js') }}"></script>
        <script src="{{ asset('/themes/porto_2/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
        <script src="{{ asset('/themes/porto_2/vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
        <script src="{{ asset('/themes/porto_2/vendor/isotope/jquery.isotope.min.js') }}"></script>
        <script src="{{ asset('/themes/porto_2/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('/themes/porto_2/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('/themes/porto_2/vendor/vide/vide.min.js') }}"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="{{ asset('/themes/porto_2/js/theme.js') }}"></script>

        <!-- Current Page Vendor and Views -->
        <script src="{{ asset('/themes/porto_2/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('/themes/porto_2/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('/themes/porto_2/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js') }}"></script>
        <script src="{{ asset('/themes/porto_2/js/views/view.home.js') }}"></script>
        <script src="{{ asset('/themes/porto_2/js/views/view.contact.js') }}"></script>

        <!-- Theme Custom -->
        <script src="{{ asset('/themes/porto_2/js/custom.js') }}"></script>
        <script src="{{ asset('/themes/porto_2/js/theme.init.js') }}"></script>

        <!-- Theme Initialization Files -->



        <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-12345678-1', 'auto');
            ga('send', 'pageview');
        </script>
         -->

    </body>
</html>

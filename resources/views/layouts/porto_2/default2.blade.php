@include('js-localization::head')
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>@yield('title')</title>

        <meta name="keywords" content="{{env('DOMAIN')}}" />
        <meta name="description" content="{{env('DOMAIN')}}">
        <meta name="author" content="{{env('DOMAIN')}}">

		<meta id="token" name="csrf-token" content="{{ csrf_token() }}" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		{{-- {{Html::style(asset('vendor/bootstrap/css/bootstrap.min.css'))}} --}}
		{{-- {{Html::style(asset('vendor/font-awesome/css/font-awesome.min.css'))}} --}}

		{{Html::style(asset('css/app.css'))}}

		{{Html::style(asset('/themes/porto_2/vendor/simple-line-icons/css/simple-line-icons.min.css'))}}
		{{Html::style(asset('/themes/porto_2/vendor/owl.carousel/assets/owl.carousel.min.css'))}}
		{{Html::style(asset('/themes/porto_2/vendor/owl.carousel/assets/owl.theme.default.min.css'))}}
		{{Html::style(asset('/themes/porto_2/vendor/magnific-popup/magnific-popup.min.css'))}}

		<!-- Theme CSS -->
		{{Html::style(asset('/themes/porto_2/css/theme.css'))}}
		{{Html::style(asset('/themes/porto_2/css/theme-elements.css'))}}
		{{Html::style(asset('/themes/porto_2/css/theme-blog.css'))}}
		{{Html::style(asset('/themes/porto_2/css/theme-shop.css'))}}
		{{-- {{Html::style(asset('css/theme-animate.css'))}} --}}


		<!-- Skin CSS -->
		{{Html::style(asset('/themes/porto_2/css/skins/default.css'))}}

		<!-- Theme Custom CSS -->

		{{-- {{Html::style(asset('css/custom_'.space().'.css')) }} --}}


		@yield('header_scripts')

		<!-- Head Libs -->
		{{-- <script src="vendor/modernizr/modernizr.min.js"></script> --}}

	</head>
	<body >
		<div class="body">

			{{-- @include('public.header3') --}}
			<div role="main" class="main">
                               @include('notifications')
				               @include('flash::message')
				               @yield('content')
				<!--
				               <div class="container">

				               <div class="row">
				                   <div class="col-md-9">

				                   </div>
				                  <div class="col-md-2">
				                       @yield('sidebar')
				                   </div>
				               </div>
				               </div>
				    -->
				            </div>

				           @include('public.footer')
			</div>


		</div>

		<!-- Vendor -->
		{{ Html::script(asset('js/main.js'))}}
		{{ Html::script(asset('js/vendor.js'))}}
		{{-- {{ Html::script(asset('vendor/jquery/jquery.min.js'))}} --}}
		{{ Html::script(asset('/themes/porto_2/vendor/jquery.appear/jquery.appear.min.js'))}}
		{{ Html::script(asset('/themes/porto_2/vendor/jquery.easing/jquery.easing.min.js'))}}
		{{ Html::script(asset('/themes/porto_2/vendor/jquery-cookie/jquery-cookie.min.js'))}}
		{{-- {{ Html::script(asset('/themes/porto_2/vendor/bootstrap/js/bootstrap.min.js'))}} --}}
		{{ Html::script(asset('/themes/porto_2/vendor/common/common.min.js'))}}
		{{ Html::script(asset('/themes/porto_2/vendor/jquery.validation/jquery.validation.min.js'))}}
		{{ Html::script(asset('/themes/porto_2/vendor/jquery.stellar/jquery.stellar.min.js'))}}
		{{ Html::script(asset('/themes/porto_2/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js'))}}
		{{ Html::script(asset('/themes/porto_2/vendor/jquery.gmap/jquery.gmap.min.js'))}}
		{{ Html::script(asset('/themes/porto_2/vendor/jquery.lazyload/jquery.lazyload.min.js'))}}
		{{ Html::script(asset('/themes/porto_2/vendor/isotope/jquery.isotope.min.js'))}}
		{{ Html::script(asset('/themes/porto_2/vendor/owl.carousel/owl.carousel.min.js'))}}
		{{ Html::script(asset('/themes/porto_2/vendor/magnific-popup/jquery.magnific-popup.min.js'))}}
		{{ Html::script(asset('/themes/porto_2/vendor/vide/vide.min.js'))}}

		<!-- Theme Base, Components and Settings -->
		{{ Html::script(asset('js/theme.js'))}}

		<!-- Theme Custom -->
		{{ Html::script(asset('js/custom.js'))}}

		<!-- Theme Initialization Files -->
		{{ Html::script(asset('js/theme.init.js'))}}

		<script>
		    $('#flash-overlay-modal').modal();
		</script>

		@yield('footer_scripts')

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

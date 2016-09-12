@include('js-localization::head')
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta id="token" name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="_token" content="{{ csrf_token() }}" />
    <title>Login | Backoffice</title>


    {!! Html::style('themes/inspina/css/bootstrap.min.css') !!}
    {!! Html::style('themes/inspina/font-awesome/css/font-awesome.css') !!}
    {!! Html::style('themes/inspina/css/animate.css') !!}
    {!! Html::style('themes/inspina/css/style.css') !!}

</head>

<body class="gray-bg">
    @include('notifications')
    @include('flash::message')

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            @yield('content')
        </div>
    </div>

    <!-- Mainly scripts -->

    {!! \Html::script('js/vendor.js') !!}

    <script type="text/javascript">
        // public/js/config.js
        $(function () {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
            });
        });
    </script>

    @yield('js-localization.head')
    <script src="/js/main.js"></script>
    @yield('footer_scripts')

    {{-- {!! Html::script('themes/inspina/js/jquery-2.1.1.js') !!}
    {!! Html::script('themes/inspina/js/bootstrap.min.js') !!} --}}

</body>

</html>

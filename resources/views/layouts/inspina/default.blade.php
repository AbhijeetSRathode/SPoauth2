@include('js-localization::head')
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-type" value="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta id="token" name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="_token" content="{{ csrf_token() }}" />

    <title>@yield('title') | Backoffice</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

        {!! \Html::style('/css/app.css') !!}
      {{-- {!! \Html::style('themes/inspina/css/bootstrap.min.css') !!}
      {!! \Html::style('themes/inspina/font-awesome/css/font-awesome.css') !!} --}}



    {!! \Html::style('https://fonts.googleapis.com/icon?family=Material+Icons') !!}
    {!! \Html::style('themes/inspina/css/plugins/fullcalendar/fullcalendar.css') !!}

    {!! \Html::style('themes/inspina/css/plugins/chosen/chosen.css') !!}

    <!-- Morris -->
    {!! \Html::style('themes/inspina/css/plugins/morris/morris-0.4.3.min.css') !!}





    <!-- Toastr style -->
    {!! \Html::style('themes/inspina/css/plugins/toastr/toastr.min.css') !!}

    <!-- Gritter -->
    {!! \Html::style('themes/inspina/js/plugins/gritter/jquery.gritter.css') !!}

    {!! \Html::style('themes/inspina/css/animate.css') !!}
    {!! \Html::style('themes/inspina/css/style.css') !!}
    {!! \Html::style('themes/inspina/css/modif.css') !!}

    {!! \Html::style('themes/inspina/css/plugins/dataTables/datatables.min.css') !!}

    <!-- datepicker -->
    {{-- {!! \Html::style('themes/inspina/css/plugins/datapicker/datepicker3.css') !!} --}}

    <!-- Sweet Alert -->
    {!! \Html::style('themes/inspina/css/plugins/sweetalert/sweetalert.css') !!}


    @yield('header_scripts')
</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    @include("layouts.inspina.sidebar")
                </ul>
            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    @include("layouts.inspina.navbar")
                </nav>
            </div>
            @include('notifications')
            @include('flash::message')

            @if(isset($vueView))
                <component is="{{$vueView}}">
                    @yield('content')
                </component>
            @else
                    @yield('content')
            @endif

            @include("layouts.inspina.chat")
            {{-- @include("layouts.inspina.rightsidebar") --}}
        </div>
    </div>


    <!-- Mainly scripts -->
    {{-- {!! \Html::script('themes/inspina/js/jquery-2.1.1.js') !!}
    {!! \Html::script('themes/inspina/js/bootstrap.min.js') !!}
 --}}

    {!! \Html::script('js/vendor.js') !!}

    <script type="text/javascript">
        // public/js/config.js
        $(function () {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
            });
        });
    </script>



    {!! \Html::script('themes/inspina/js/plugins/metisMenu/jquery.metisMenu.js') !!}
    {!! \Html::script('themes/inspina/js/plugins/slimscroll/jquery.slimscroll.min.js') !!}
    {!! Html::script('themes/inspina/js/plugins/chosen/chosen.jquery.js') !!}

    <!-- jeditable -->
    {!! \Html::script('themes/inspina/js/plugins/jeditable/jquery.jeditable.js') !!}

    <!-- Sweet alert -->
    {!! \Html::script('themes/inspina/js/plugins/sweetalert/sweetalert.min.js') !!}
    {!! HTML::script('themes/inspina/js/inspinia.js') !!}


    @yield('js-localization.head')
    <script src="/js/main.js"></script>
    @yield('footer_scripts')

</body>

</html>

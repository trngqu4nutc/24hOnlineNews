<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('templates/admin/images/favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('templates/admin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('templates/admin/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ asset('templates/admin/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">
    <link href="{{ asset('templates/admin/libs/toastr/build/toastr.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('templates/admin/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
    <style>
        .card-header{
            background-color: #ffffff;
        }
        th, td{
            text-align: center;
        }
    </style>
    @yield('css', false)
</head>

<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

    @include('partials.header')
    @include('partials.slidebar')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                @yield('content')

            </div>
        </div>
        @include('partials.footer')

    </div>

</div>

<div class="rightbar-overlay"></div>
<script src="{{ asset('templates/admin/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('templates/admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('templates/admin/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('templates/admin/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('templates/admin/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('templates/admin/libs/toastr/build/toastr.min.js') }}"></script>
<script src="{{ asset('templates/admin/libs/sweetalert2/sweetalert2.min.js') }}"></script>
{{--<script src="{{ asset('templates/admin/libs/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>--}}

{{--<script src="{{ asset('templates/admin/js/pages/form-element.init.js') }}"></script>--}}

<script src="{{ asset('templates/admin/js/app.js') }}"></script>
@yield('script', false)

</body>
</html>

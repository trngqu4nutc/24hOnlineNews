<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield("title")
    <link rel="stylesheet" href="{{ asset('templates/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/admin/dist/css/adminlte.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
        th, tr {
            text-align: center;
        }
    </style>
    @yield("css", false)
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    @include("partials.header")

    @include("partials.slidebar")

    @yield("content")

    @include("partials.footer")

</div>
<!-- jQuery -->
<script src="{{ asset('templates/admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('templates/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('templates/admin/dist/js/adminlte.min.js') }}"></script>
@yield("script", false)
</body>
</html>

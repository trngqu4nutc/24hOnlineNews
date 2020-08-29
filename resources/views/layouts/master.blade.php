<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>24OnlineNews - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('template_vnexpress/plugins/bootstrap.min.css')}}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    @yield('css')
</head>
<body>
<div>
    @include('partials.topHeader')
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
</div>
<script src="https://kit.fontawesome.com/440cdb8b20.js" crossorigin="anonymous"></script>
<script src="{{asset('template_vnexpress/plugins/jquery-3.5.1.slim.min.js')}}"></script>
<script src="{{asset('template_vnexpress/plugins/popper.min.js')}}"></script>
<script src="{{asset('template_vnexpress/plugins/jquery-3.5.1.slim.min.js')}}"></script>
@yield('js')
</body>
</html>

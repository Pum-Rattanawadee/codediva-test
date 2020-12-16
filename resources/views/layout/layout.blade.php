<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Swensens1112.com :: @yield('title')
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/vendor/fontawesome/css/all.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/vendor/slick/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('/vendor/slick/slick/slick-theme.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/custom.css')}}" />
    <script src="{{asset('/js/jquery-3.5.1.min.js')}}" type="text/javascript"></script>
</head>
<body>
    @include('layout.header')
    
    <div id="content" class="container-fluid m-0">
      @yield('content')
    </div>

    @include('layout.footer')

    @yield('script')

    <script type="text/javascript" src="{{asset('/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/vendor/slick/slick/slick.min.js')}}"></script>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" />
    <meta name="keyword" content="I AM AVITA">
    <meta name="description" content="I AM AVITA Campaign"/>

    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="I AM AVITA Campaign">

    <meta property="og:image" content="{{ asset('images/fb-pic.jpg') }}">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">


    <meta property="fb:app_id" content="{{ env('FACEBOOK_CLIENT_ID') }}" />


    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">

    @yield('meta')
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rossorigin="anonymous">

    <title>{{ __('title.IMAVITA_home') }}</title>

    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito"; rel="stylesheet">

    <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
   
    @stack('css')
    @yield('css')
  



<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>




</head>

<body class="en-in">

@include('partials.header')

<!-- Content -->
@yield('content')
<!-- ./Content -->


    @include('partials.footer')


    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>


@stack('js')
@yield('js')

</body>
</html>
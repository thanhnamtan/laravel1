<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  @yield('meta')

  <title>@yield('title')</title>

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/js/jquery-ui/jquery-ui.theme.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/js/jquery-ui/jquery-ui.css') }}">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  @yield('head_css')

  <script src="{{ asset('assets/vendor/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js/jquery-ui/jquery-ui.js') }}"></script>
  @yield('head_js')

</head>
<body>
    @yield('bot_body_js')
    @extends('base.layout.component.source.js')
    @extends('base.layout.component.source.af_footer')
    @extends('base.layout.component.source.footer')
    @extends('base.layout.component.source.list')
    @extends('base.layout.component.source.hero')
    @extends('base.layout.component.source.header')
    @yield('top_body_js')
    @yield('top_body_css')
</body>
</html>
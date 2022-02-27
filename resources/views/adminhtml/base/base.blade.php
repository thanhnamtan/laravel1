<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">

    <title>@yield('admin_title', "adminhtml page")</title>

    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('adminhtml/assets/images/favicon.png') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('adminhtml/assets/plugins/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('adminhtml/css/style.min.css') }}" rel="stylesheet">

    @yield('admin_top_css')

    @yield('admin_top_js')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    {{-- dùng extend như này phải đảo ngược lại vị trí của các thành phần. --}}
    @extends('adminhtml.base.components.bott_body_js')

    @extends('adminhtml.base.components.en')

    @extends('adminhtml.base.components.page-wrapper')

    @extends('adminhtml.base.components.left-sidebar')

    @extends('adminhtml.base.components.topbar')

    @extends('adminhtml.base.components.preloader')

    @extends('adminhtml.base.components.be')
 
</body>

</html>
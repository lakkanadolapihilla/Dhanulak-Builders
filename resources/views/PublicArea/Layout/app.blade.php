<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dhanulak Builders</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('PublicArea/assets/img/favicon.jpg')}}" rel="icon">
    <link href="{{asset('PublicArea/assets/img/apple-touch-icon.jpg')}}" rel="apple-touch-icon">
    @include('PublicArea.Includes.css')

</head>

<body>

    <!-- ======= Header ======= -->

    @include('PublicArea.Includes.nav')
    <!-- End Header -->
    @yield('content')

    <!-- ======= Footer ======= -->
    @include('PublicArea.Includes.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    @include('PublicArea.Includes.js')

</body>

</html>

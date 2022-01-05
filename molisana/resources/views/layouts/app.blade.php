<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>La Molisana | @yield('page-title', 'pasta') </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- CUSTOM CSS -->
    @yield('custom-css')

</head>

<body>

    <!-- Import Header -->
    @include('partials.header')

    <main id="site_main">
        @yield('content')
    </main>

    <!-- Import Footer -->
    @include('partials.footer')

    <!-- CUSTOM SCRIPTS -->
    @yield('custom-js')

</body>

</html>
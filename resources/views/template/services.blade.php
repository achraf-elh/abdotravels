<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @yield('style')
</head>
<body>
    @include('template.navbar')




    @yield('spinner start')
    @yield('header start')
    @yield('services')
    @yield('subscribe')




    @include('template.copyright')


    @yield('script')
</body>
</html>
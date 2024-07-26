<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        @yield('style')
    </head>
    <body>

 @include('template.navbar')



            @yield('spinner')
           
            @yield('nav hero')
            @yield('destination')
            @yield('packages')
            @yield('header start')
            @yield('toor booking')




        @include('template.copyright')
        @yield('script')
    </body>
</html>
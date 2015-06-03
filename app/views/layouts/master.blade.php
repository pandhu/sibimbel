<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            Laravel 4 - Tutorial
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSS are placed here -->
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-theme.css') }}
        {{ HTML::style('css/jquery-ui.css') }}
        {{ HTML::style('css/style.css') }}

        @yield('style')
    </head>

    <body>
        <!-- Container -->
            <!-- Content -->
            @yield('content')

        <!-- Scripts are placed here -->
        {{ HTML::script('js/jquery.min.js') }}
        {{ HTML::script('js/jquery-ui.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        @yield('script')


    </body>
</html>
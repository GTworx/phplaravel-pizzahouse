<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pizza House</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/main.scss', 'resources/sass/app.scss'])
    </head>
    <body>
        @yield('content')

        <footer>
            Copyright 2022 Pizza House
        </footer>
    </body>
</html>
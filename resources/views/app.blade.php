<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/9/95/Vue.js_Logo_2.svg" type="image/x-icon">
        <title>Laravel</title>
    </head>
    <body class="antialiased">
        <!-- <main id="app"></main> -->
        <p id="app">
            <!-- <Car/> -->
        </p>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>

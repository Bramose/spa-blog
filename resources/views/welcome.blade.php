<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body class="bg-gray-200">
        <div id="app">
            <router-link to="/home">Home</router-link>
            <router-view></router-view>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

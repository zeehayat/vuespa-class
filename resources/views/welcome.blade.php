<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Application</title>

        @vite('resources/css/app.css')
        @vite(['resources/js/app.js'])
    </head>
    <body>
        <div id="app">
                <app />
        </div>
    </body>
</html>

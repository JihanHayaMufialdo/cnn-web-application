<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Budi</title>

        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body>
        <div class="bg-black w-100">
            Ini halaman ngetes
        </div>
    </body>
</html>

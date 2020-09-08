<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>وقتش</title>

        <link rel="stylesheet" href="/css/fonts.css">
        <link rel="stylesheet" href="/css/app.css">
        <link href='/calandar/fullcalendar.min.css' rel='stylesheet' />
    </head>
    <body>
        <!-- Below code will call the vue script -->
        <div id="app"><calandar-component></calandar-component></div>

        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        <script src="{{asset('js/app.js')}}"></script>
        <script src='/calandar/moment.min.js'></script>
        <script src='/calandar/moment-jalaali.js'></script>
        <script src='/calandar/jquery.js'></script>
        <script src='/calandar/fullcalendar.js'></script>
        <script src='/calandar/fa.js'></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}

        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <!-- Below code will call the vue script -->
        <div id="app"><calandar-component></calandar-component></div>
        <script src="{{asset('js/app.js')}}"></script>
        
    </body>
</html>
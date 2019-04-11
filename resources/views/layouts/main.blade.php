<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IMCAS PHP LARAVEL TEST - KAI HONG</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/khong.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                @yield('test')
            </div>
        </div>
        <script href="{{ asset('js/app.js') }}" type="text/js"></script>
    </body>
</html>
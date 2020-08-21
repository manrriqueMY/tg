<!DOCTYPE HTML>
<html>
    <head>
        <title>Talento Inclusivo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
        <style>
            :root{
                --color-primary:#ff0709;
            }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.tgweb.spyrohost.com/css/style.css">
        <link rel="stylesheet" href="/assets/css/commons.css">
        <link rel="stylesheet" href="/assets/css/index.css">
        @stack('css')
    </head>
    <body>
        <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a>
        @include('layouts.navbar')
        @yield('content')
        @include('layouts.footer')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="/assets/js/commons.js"></script>
        @stack('js')
    </body>
</html>
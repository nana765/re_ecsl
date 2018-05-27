<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link href="/css/app.css" rel="stylesheet">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            @include('layouts.nav')
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
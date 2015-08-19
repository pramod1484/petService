<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf_token" content="{{ Crypt::encrypt(csrf_token()) }}" />

        <title>Pet Services</title>
        {{ HTML::style('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
    <footer>
        {{ HTML::script('bower_components/jquery/dist/jquery.min.js') }}
        {{ HTML::script('bower_components/bootstrap/dist/js/bootstrap.min.js') }}
    </footer>
</html>
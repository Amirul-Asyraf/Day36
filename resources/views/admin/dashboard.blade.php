<html>
    <head>
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
    <body>

        @auth
        // The user is authenticated ...
        <br/>Hi {{ Auth::user()->name}},<br/>
        <a href="{{ route("logout")}}">Logout</a>
        <br/><br/>
        @endauth

        @guest
            // The user is not authenticated ...
        @endguest
    </body>
</html>

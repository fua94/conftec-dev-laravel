<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Materialize</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">

  </head>

  <body>
    @yield('content')

    <!-- Compiled and minified JavaScript -->
    <script src="{{asset('js/materialize.min.js')}}"></script>

    <script>
      
      document.addEventListener('DOMContentLoaded', function() {
        M.AutoInit();
      });
      
    </script>

  </body>

</html>
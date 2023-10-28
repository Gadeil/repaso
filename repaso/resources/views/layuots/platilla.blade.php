<!DOCTYPE html>
<html lang="en">
<head>

    <!-- importar todos los estilos --> 

  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    
    
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    @vite(['resources/js/app.js'])


</head>
<body>
    @include('partials.navbar')
    @yield('content')
    @include('partials.PiePagina')

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Proyecto</title>
</head>
<body>
    
    @include('nav')

    <div class="container2">
    @yield('content')
    </div>

    <div class="container3">
        @yield('MostrarE')
    </div>

    <div class="container3">
        @yield('formE')
    </div>

    <div class="container3">
        @yield('formD')
    </div>

    <div class="container3">
        @yield('formTC')
    </div>

    <div class="container3">
        @yield('formC')
    </div>

    <div class="container3">
        @yield('tablaE')
    </div>

    <div class="container3">
        @yield('tablaD')
    </div>

    <div class="container3">
        @yield('tablaTC')
    </div>

    <div class="container3">
        @yield('tablaC')
    </div>



</body>
</html>
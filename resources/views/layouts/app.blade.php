<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema - @yield('titulo')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
    <header>
        @include('layouts.nav');
    </header>

    
    <section style="padding-top: 4.5rem;">
        @yield('contenido')
    </section>
    @include('layouts.footer')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de control</title>
</head>
<body>
    
    {{--
    su nota es: {{$nota}}
    <br>
    situacion:
    @if($nota > 13)
        aprobado
    @else
        reprobado
    @endif 
    
    --}}
    
    {{--
    @switch($numero)
        @case(1)
            Domingo
            @break
        @case(2)
            Lunes
            @break
        @case(3)
            Martes
            @break
        @case(4)
            Miercoles
            @break
        @default
            Error
            @break
    @endswitch
    --}}



    
    {{-- 
    @while ($numero > 0)
        <p>{{$numero = $numero -1}} </p>
    @endwhile
    
    --}}
    
    @foreach ($lista as $objeto)
        <p> {{ $objeto }}</p>
    @endforeach

</body>
</html>
<?php
//$nombre = "nes";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h2>Empezamos {{$nombre . ' '. $apellido}}</h2><br>

    <h3>Ciclo For: </h3>
    @for ($i = 0; $i < count($nombres); $i++)
        {{$nombres[$i]}}<br>
    @endfor
    <br>
    <h3>Ciclo foreach</h3>
    @foreach ($nombres as $item)
        Hola bb: {{$item}}
        <br>
    @endforeach

    {{--  @forelse ($collection as $item)
        
    @empty
        
    @endforelse  --}}

</body>
</html>
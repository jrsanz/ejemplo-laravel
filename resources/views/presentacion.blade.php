<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentación</title>
</head>
<body>
    <h1>Página de Presentación</h1>

    {{ $nombre }}  <!-- Es cómo si se hiciera un echo en php -->

    @if ($nombre == "JESUS")
        Hola {{ $nombre }}
    @else
        Hola Extraño
    @endif

    <p>
        Nombre Completo: {{ $nombre_completo }}
    </p>
</body>
</html>
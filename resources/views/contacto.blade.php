<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Página de Contacto</h1>
    <ul>
        <li><a href="/informacion">Información</a></li>
        <li><a href="{{ action([App\Http\Controllers\PaginasController::class, 'informacion']) }}">Información</a></li>
        <li><a href="{{ action([App\Http\Controllers\PaginasController::class, 'contacto']) }}">Contacto</a></li>
    </ul>
    <form action="{{ route('recibe-contacto') }}" method="POST">
        @csrf
    
        <label for="correo">Correo:</label><br>
        <input type="email" name="correo">
        <br>
        <label for="comentario">Comentario:</label><br>
        <textarea name="comentario" cols="30" rows="6"></textarea>
        <br>
        <label for="telefono">Teléfono</label><br>
        <input type="text" name="telefono">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
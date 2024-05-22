<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear entrada</title>
</head>
<body>
    <form action="{{ route('entrada.store') }}" method="post">
        @csrf
        <label for="placa">Placa</label>
        <input type="text" name="placa" id="placa">
        <label for="fecha">Fecha</label>
        <input type="datetime-local" name="fecha" id="fecha">
        <!-- Agregar campos ocultos para el modelo y propietario -->
        <input type="hidden" name="modelo" id="modelo">
        <input type="hidden" name="propietario" id="propietario">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>

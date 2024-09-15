<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Generador de Tabla de Multiplicación</h2>
    <nav>
        <ul>
        <li><a href="http://localhost/web2/tp1/ejercicio4.php/router.php?action=tabla/5">Tabla del 5</a></li>
        <li><a href="http://localhost/web2/tp1/ejercicio4.php/router.php?action=tabla/10">Tabla del 10</a></li>
        <li><a href="http://localhost/web2/tp1/ejercicio4.php/router.php?action=tabla/20">Tabla del 20</a></li>

        </ul>
    </nav>
    <form method="post">
        <label for="limite">Ingrese el límite de la tabla:</label>
        <input type="number" id="limite" name="limite" min="1" required>
        <input type="submit" value="Enviar">
    </form>
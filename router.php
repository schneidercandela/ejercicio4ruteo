<?php
require_once "tablas.php";

if (!empty ($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "home";
}

// Verifica qué valor está llegando en 'action'
echo "Action recibida: " . $action . "<br>";

$params = explode("/", $action);

// Mostrar el contenido de $params para depurar
echo "<pre>";
print_r($params);
echo "</pre>";

switch ($params[0]) {
    case "home":
        showHome();
        break;
    case "tabla":
        // Verificar que $params[1] esté configurado
        if (isset($params[1])) {
            echo "Generando tabla del número: " . $params[1] . "<br>";
            generarTablaMultiplicacion($params[1]);
        } else {
            echo "No se ha pasado un número válido para la tabla.";
            showHome();
        }
        break;
    default:
        echo "Ruta no encontrada";
        break;
}


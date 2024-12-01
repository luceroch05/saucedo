<?php
// Incluye los controladores necesarios
require_once './src/controllers/ProductosController.php';

use App\Controllers\ProductosController;

// Instancia del controlador
$controllerInstance = null;

// Asigna el controlador correspondiente
switch ($controller) {
    case 'productos':
        $controllerInstance = new ProductosController();
        break;
    default:
        echo "Controlador no encontrado";
        exit;
}

// Ejecutar la acción correspondiente
if (method_exists($controllerInstance, $action)) {
    call_user_func([$controllerInstance, $action], $_GET);
} else {
    echo "Acción no encontrada";
}

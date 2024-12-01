<?php
// Incluye los controladores necesarios
require_once './src/controllers/RepuestoController.php';

use App\Controllers\RepuestoController;

// Instancia del controlador
$controllerInstance = null;

// Asigna el controlador correspondiente
switch ($controller) {
    case 'repuesto':
        $controllerInstance = new RepuestoController();
        break;
    default:
        echo "Controlador no encontrado";
        exit;
}

// Ejecutar la acción correspondiente
if (method_exists($controllerInstance, $action)) {
    // Llama al método dinámicamente
    call_user_func([$controllerInstance, $action], $_GET);
} else {
    echo "Acción no encontrada";
}

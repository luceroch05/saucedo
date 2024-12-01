<?php

use App\Controllers\GuestController;

require_once './src/controllers/GuestController.php';

$controller = new GuestController();

$action = isset($_GET['action']) ? $_GET['action'] : 'home'; // Acción predeterminada es 'home'

// Manejo de las acciones
switch ($action) {
    case 'home':
        $controller->home();
        break;
    case 'nosotros':
        $controller->nosotros();
        break;
    case 'servicios':
        $controller->servicios();
        break;
    case 'contacto':
        $controller->contacto();
        break;
    default:
        echo "Página no encontrada.";
        break;
}

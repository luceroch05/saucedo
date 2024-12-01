<?php
// Cargar el controlador de repuestos
include '../src/controllers/RepuestoController.php';


// Obtener el controlador y la acción desde la URL, con valores por defecto
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'repuesto';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Comprobar si el controlador existe y cargarlo
switch ($controller) {
    case 'repuesto':
        $controller = new RepuestoController();
        break;
    default:
        // Controlador no encontrado, redirigir o manejar el error
        echo "Controlador no encontrado";
        exit;
}

// Ejecutar la acción correspondiente
switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'create':
        $controller->create();
        break;
    case 'edit':
        if (isset($_GET['id'])) {
            $controller->edit($_GET['id']);
        } else {
            echo "ID no proporcionado para editar";
        }
        break;
    case 'store':
        $controller->store($_POST);
        break;
    case 'update':
        if (isset($_GET['id'])) {
            $controller->update($_POST, $_GET['id']);
        } else {
            echo "ID no proporcionado para actualizar";
        }
        break;
    case 'delete':
        if (isset($_GET['id'])) {
            $controller->delete($_GET['id']);
        } else {
            echo "ID no proporcionado para eliminar";
        }
        break;
    default:
        echo "Acción no encontrada";
        break;
}


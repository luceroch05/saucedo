<?php
// Inicia sesión para manejar roles o estados de usuario
session_start();

// Incluir el archivo de configuración (por ejemplo, conexión a la BD)
require_once './src/utils/config.php';

// Autoload de clases
require_once './src/utils/autoload.php';

// Obtener el rol del usuario desde la sesión
$role = $_SESSION['role'] ?? 'guest'; // Rol predeterminado: 'guest'

// Obtener el controlador y la acción desde la URL
$controller = $_GET['controller'] ?? 'home'; // Por defecto, 'home'
$action = $_GET['action'] ?? 'index';        // Por defecto, 'index'

// Redirigir al archivo de rutas según el rol
switch ($role) {
    case 'admin':
        require_once './routes/admin.php';
        break;
    case 'user':
        require_once './routes/user.php';
        break;
    default:
        require_once './routes/guest.php';
        break;
}

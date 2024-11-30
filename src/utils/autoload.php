
<?php

function autoload($className) {
    // Ruta base de la aplicación (carpeta raíz)
    $baseDir = __DIR__ . '/../'; // Apunta a la carpeta raíz del proyecto

    // Asegúrate de que el namespace sea "App", y reemplázalo con la ruta correcta
    $classPath = str_replace(['App\\', '\\'], ['', DIRECTORY_SEPARATOR], $className) . '.php';
    $file = $baseDir . $classPath;

    // Verificar si el archivo existe y cargarlo
    if (file_exists($file)) {
        require_once $file;
    } else {
        die("No se pudo cargar la clase: $className. Archivo esperado: $file");
    }
}

// Registrar la función de autoload
spl_autoload_register('autoload');

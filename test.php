<?php
// Incluir el archivo de configuración
require_once 'src/utils/config.php';

try {
    // Crear una conexión PDO
    $dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=" . DBCHARSET;
    $pdo = new PDO($dsn, DBUSER, DBPASSWORD);

    // Configurar errores de PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Si llega aquí, la conexión fue exitosa
    echo "Conexión exitosa a la base de datos!";
} catch (PDOException $e) {
    // Manejar errores de conexión
    echo "Error al conectar a la base de datos: " . $e->getMessage();
}

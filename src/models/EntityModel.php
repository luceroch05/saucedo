<?php

namespace App\Models;

use PDO;
use PDOException;
require_once '../utils/config.php'; // Asegúrate de que la ruta sea correcta

class EntityModel
{
    protected $pdo;
    public $table = 'repuesto';  // Asegúrate de que este valor esté correctamente definido para cada subclase

    // Constructor: solo establecer la conexión una vez
    public function __construct() {
        require_once '../utils/config.php'; // Asegúrate de que la ruta sea correcta
        $this->connect();
    }

    // Método para conectar a la base de datos
    function connect() {
        try {
            // Crear la cadena de conexión DSN (Data Source Name)
            $dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=" . DBCHARSET;
            
            // Crear una instancia de PDO
            $pdo = new PDO($dsn, DBUSER, DBPASSWORD);
            
            // Configurar PDO para manejar errores
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $pdo;
        } catch (PDOException $e) {
            // Mostrar detalles del error en caso de fallo de conexión
            echo "Error al conectar a la base de datos: " . $e->getMessage();
            exit;
        }
    }

    // Obtener todos los registros
    public function all() {
        $query = "SELECT * FROM $this->table";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Buscar un registro específico por ID
    public function find($columns, $id) {
        $query = "SELECT $columns FROM $this->table WHERE id=:id"; 
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([':id' => $id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this));
        return $stmt->fetch();  // Retorna un solo resultado
    }

    // Insertar un nuevo registro
    public function insert($columns, $replaces) {
        // Se deben construir las columnas y valores para evitar inyecciones SQL
        $query = "INSERT INTO $this->table ($columns) VALUES ($replaces)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($replaces);
    }

    // Actualizar un registro
    public function update($columns, $replaces, $id) {
        // Asegúrate de que $columns contiene las claves como 'columna=:valor'
        $query = "UPDATE $this->table SET $columns WHERE id=:id";
        $replaces[':id'] = $id;  // Agregar el ID a los parámetros
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($replaces);
    }

    // Eliminar un registro por ID
    public function delete($id) {
        $query = "DELETE FROM $this->table WHERE id=:id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([':id' => $id]);
    }
}
// Remove redundant closing tag

<?php

namespace App\Models;

use PDO;
use PDOException;

class EntityModel
{
    protected $pdo;
    public $table = 'tbl';  // Asegúrate de que este valor esté correctamente definido para cada subclase

    // Constructor: solo establecer la conexión una vez
    public function __construct() {
        require_once __DIR__ . '/../utils/config.php';
        $this->connect();
    }

    // Método para conectar a la base de datos
    public function connect() {
        try {
            // Se asume que DBHOST, DBNAME, DBUSER y DBPASSWORD están definidos en tu archivo config.php
            echo "Intentando conectar a la base de datos...<br>";
            if ($this->pdo === null) {
                $this->pdo = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME, DBUSER, DBPASSWORD);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Conexión exitosa a la base de datos.<br>";
            }
        } catch (PDOException $e) {
            error_log("Error de conexión: " . $e->getMessage());  // Registra el error en el log
            die("Error al conectar a la base de datos: " . $e->getMessage());
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
?>
